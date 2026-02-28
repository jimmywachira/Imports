<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Add new price range columns
            $table->decimal('cif_price_min', 12, 2)->default(0)->after('auction_grade');
            $table->decimal('cif_price_max', 12, 2)->default(0)->after('cif_price_min');
        });

        // Copy existing cif_price values to both min and max
        DB::table('vehicles')->update([
            'cif_price_min' => DB::raw('cif_price'),
            'cif_price_max' => DB::raw('cif_price * 1.05'), // Add 5% as max
        ]);

        Schema::table('vehicles', function (Blueprint $table) {
            // Drop old column
            $table->dropColumn('cif_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Add back the old column
            $table->decimal('cif_price', 12, 2)->default(0)->after('auction_grade');
        });

        // Copy min value back to cif_price
        DB::table('vehicles')->update([
            'cif_price' => DB::raw('cif_price_min'),
        ]);

        Schema::table('vehicles', function (Blueprint $table) {
            // Drop the range columns
            $table->dropColumn(['cif_price_min', 'cif_price_max']);
        });
    }
};
