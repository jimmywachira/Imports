<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('vehicles', 'uuid')) {
            Schema::table('vehicles', function (Blueprint $table) {
                $table->uuid('uuid')->nullable()->after('id');
            });
        }

        DB::statement('UPDATE vehicles SET uuid = (UUID()) WHERE uuid IS NULL');
        DB::statement('ALTER TABLE vehicles MODIFY id BIGINT UNSIGNED NOT NULL');
        DB::statement('ALTER TABLE vehicles DROP PRIMARY KEY');
        DB::statement('ALTER TABLE vehicles DROP COLUMN id');
        DB::statement('ALTER TABLE vehicles CHANGE uuid id CHAR(36) NOT NULL');
        DB::statement('ALTER TABLE vehicles ADD PRIMARY KEY (id)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE vehicles DROP PRIMARY KEY');
        DB::statement('ALTER TABLE vehicles CHANGE id uuid CHAR(36) NOT NULL');
        DB::statement('ALTER TABLE vehicles ADD COLUMN id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT FIRST');
        DB::statement('ALTER TABLE vehicles ADD PRIMARY KEY (id)');
        DB::statement('ALTER TABLE vehicles DROP COLUMN uuid');
    }
};
