<!-- Navigation Bar -->
<nav class="sticky top-0 z-50 w-full backdrop-blur-md bg-white/80 text-slate-900 dark:bg-blue-950/80 dark:text-slate-100 border-b border-slate-200/20 dark:border-white/10">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex justify-evenly items-center h-14 sm:h-16">
            <!-- Logo -->
            <a href="{{ route('search') }}" class="flex items-center gap-2 hover:text-amber-400 transition-colors flex-shrink-0">
                <div class="text-lg sm:text-2xl font-bold bg-gradient-to-r from-amber-400 to-amber-500 bg-clip-text text-transparent line-clamp-1">
                    Xplore Car Imports
                </div> 
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center gap-4 lg:gap-6">
                <a href="{{ route('cars') }}" class="text-xs sm:text-sm lg:text-base text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">
                    Browse Cars
                </a>
                <a href="{{ route('about') }}" class="text-xs sm:text-sm lg:text-base text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">
                    About
                </a>
                <a href="{{ route('contact') }}" class="text-xs sm:text-sm lg:text-base text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">
                    Contact
                </a>

                <button
                    id="theme-toggle"
                    type="button"
                    class="btn btn-sm btn-ghost text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 h-10 w-10 min-h-10 p-0"
                    aria-label="Toggle theme"
                >
                    <ion-icon data-theme-icon name="moon-outline" class="text-lg md:text-xl"></ion-icon>
                </button> 

                @guest
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" class="text-xs sm:text-sm lg:text-base text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn-primary btn-sm h-10 min-h-10 p-2">
                        Register
                    </a>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex-shrink-0">
                <button 
                    id="mobile-menu-btn" 
                    class="text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors p-2 h-10 w-10 min-h-10 flex items-center justify-center"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                >
                <ion-icon name="menu" class="text-2xl"></ion-icon>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-slate-200/60 dark:border-white/10 max-h-[calc(100vh-56px)] overflow-y-auto">
            <button
                id="theme-toggle-mobile"
                type="button"
                class="w-full text-left py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm"
                aria-label="Toggle theme"
            >
                <ion-icon data-theme-icon name="moon-outline" class="align-middle mr-2"></ion-icon>
                Toggle Theme
            </button>
            <a href="{{ route('cars') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                Browse Cars
            </a>
            <a href="{{ route('about') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                About
            </a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                Contact
            </a>

            @auth
                <!-- Admin Links Mobile -->
                <div class="border-t border-slate-200/60 dark:border-white/10 mt-3 pt-3">
                    <div class="px-4 py-2 text-amber-500 dark:text-amber-400 text-xs font-semibold">
                        {{ Auth::user()->name }}
                    </div>
                    <a href="{{ route('admin.dashboard') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                        <ion-icon name="speedometer-outline" class="align-middle mr-2"></ion-icon>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.vehicles.index') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                        <icon-icon name="car-outline" class="align-middle mr-2"></icon-icon>
                        Manage Vehicles
                    </a>
                    <a href="{{ route('profile.edit') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                        <ion-icon name="settings-outline" class="align-middle mr-2"></ion-icon>
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-red-500 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                            <ion-icon name="log-out-outline" class="align-middle mr-2"></ion-icon>
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
            @guest
                <!-- Guest Links Mobile -->
                <div class="border-t border-slate-200/60 dark:border-white/10 mt-3 pt-3">
                    <a href="{{ route('login') }}" class="block py-3 px-4 text-slate-700 dark:text-slate-300 hover:text-amber-500 dark:hover:text-amber-400 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                        <ion-icon name="log-in-outline" class="align-middle mr-2"></ion-icon>
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="block py-3 px-4 text-amber-500 dark:text-amber-400 hover:text-amber-400 dark:hover:text-amber-300 hover:bg-black/5 dark:hover:bg-white/5 transition-colors rounded text-sm">
                        <ion-icon name="person-add-outline" class="align-middle mr-2"></ion-icon>
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>


        <!-- Admin Navigation -->
        @auth
                    <div class="">
                        <div class="flex items-center justify-evenly h-16">
                            <!-- Navigation Links -->
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 px-4 py-2 text-blue-300 hover:text-amber-400 rounded-lg hover:bg-blue-700 transition">
                                    <ion-icon name="speedometer-outline" class="text-lg"></ion-icon>
                                    <span class="hidden md:inline text-sm">Dashboard</span>
                                </a>
                                <a href="{{ route('admin.vehicles.index') }}" class="flex items-center gap-2 px-4 py-2 text-blue-300 hover:text-amber-400 rounded-lg hover:bg-blue-700 transition">
                                    <ion-icon name="car-outline" class="text-lg"></ion-icon>
                                    <span class="hidden md:inline text-sm">Manage Vehicles</span>
                                </a>

                                <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 px-4 py-2 text-blue-300 hover:text-amber-400 rounded-lg hover:bg-blue-700 transition">
                                                <ion-icon name="settings-outline" class="text-lg"></ion-icon>
                                                <span class="hidden md:inline text-sm">settings</span>
                                            </a>

                                        <div tabindex="0" role="button" class="flex items-center gap-2 px-4 py-2 text-blue-300 hover:text-amber-400 rounded-lg hover:bg-blue-700 transition">
                                            <ion-icon name="person-circle-outline" class="text-lg"></ion-icon>
                                        <span class="hidden lg:inline">{{ Auth::user()->name }}</span>
                                    </div>

                                    <div class="flex items-center gap-2 px-4 py-2 text-blue-300 hover:text-amber-400 rounded-lg hover:bg-blue-700 transition">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="text-blue-700 dark:text-blue-200 hover:text-red-500 w-full text-left text-sm md:text-base">
                                                    
                                                    logout<ion-icon name="log-out-outline" class="align-middle ml-2 text-sm"></ion-icon>
                                                </button>
                                            </form>
                                        </div>
                            </div> 
                        </div>
                    </div>
            @endauth
  </nav>             

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                this.setAttribute('aria-expanded', 
                    this.getAttribute('aria-expanded') === 'false' ? 'true' : 'false'
                );
            });

            // Close menu when a link is clicked
            mobileMenu.querySelectorAll('a, button').forEach(element => {
                element.addEventListener('click', function() {
                    if (element.tagName !== 'FORM') {
                        mobileMenu.classList.add('hidden');
                        mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        }
    });
</script>
