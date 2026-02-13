<!-- Navigation Bar -->
<nav class="sticky p-4 top-0 z-50 w-full backdrop-blur-md bg-blue-950/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('cars') }}" class="flex items-center gap-2 hover:text-amber-400 transition-colors">
                <div class="text-2xl font-bold bg-gradient-to-r from-amber-400 to-amber-500 bg-clip-text text-transparent">
                    Xplore car imports
                </div> 
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('cars') }}" class="text-slate-300 hover:text-amber-400 transition-colors font-medium">
                    Browse Cars
                </a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-amber-400 transition-colors font-medium">
                    About
                </a>
                <a href="{{ route('contact') }}" class="text-slate-300 hover:text-amber-400 transition-colors font-medium">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button 
                    id="mobile-menu-btn" 
                    class="text-slate-300 hover:text-amber-400 transition-colors p-2"
                    aria-label="Toggle menu"
                >
                    <ion-icon name="menu" class="text-2xl"></ion-icon>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-white/10">
            <a href="{{ route('cars') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                Browse Cars
            </a>
            <a href="{{ route('about') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                About
            </a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                Contact
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu?.classList.toggle('hidden');
    });
</script>
