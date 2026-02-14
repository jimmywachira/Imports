<!-- Navigation Bar -->
<nav class="sticky p-4 top-0 z-50 w-full backdrop-blur-md bg-blue-950/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('search') }}" class="flex items-center gap-2 hover:text-amber-400 transition-colors">
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

                @auth
                    <!-- Admin Menu -->
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-sm bg-amber-400 text-blue-900 border-none hover:bg-amber-300">
                            <ion-icon name="person-circle-outline" class="text-xl"></ion-icon>
                            {{ Auth::user()->name }}
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow-lg bg-blue-900 rounded-box w-56 mt-2">
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="text-slate-200 hover:text-amber-400">
                                    <ion-icon name="speedometer-outline"></ion-icon>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.vehicles.index') }}" class="text-slate-200 hover:text-amber-400">
                                    <ion-icon name="car-outline"></ion-icon>
                                    Manage Vehicles
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}" class="text-slate-200 hover:text-amber-400">
                                    <ion-icon name="settings-outline"></ion-icon>
                                    Settings
                                </a>
                            </li>
                            <li class="border-t border-white/10 mt-2 pt-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-slate-200 hover:text-red-400 w-full text-left">
                                        <ion-icon name="log-out-outline"></ion-icon>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" class="text-slate-300 hover:text-amber-400 transition-colors font-medium">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-sm bg-amber-400 text-blue-900 border-none hover:bg-amber-300">
                        Register
                    </a>
                @endauth
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

            @auth
                <!-- Admin Links Mobile -->
                <div class="border-t border-white/10 mt-3 pt-3">
                    <div class="px-4 py-2 text-amber-400 text-sm font-semibold">
                        {{ Auth::user()->name }}
                    </div>
                    <a href="{{ route('admin.dashboard') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                        <ion-icon name="speedometer-outline" class="align-middle"></ion-icon>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.vehicles.index') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                        <ion-icon name="car-outline" class="align-middle"></ion-icon>
                        Manage Vehicles
                    </a>
                    <a href="{{ route('profile.edit') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                        <ion-icon name="settings-outline" class="align-middle"></ion-icon>
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-3 px-4 text-slate-300 hover:text-red-400 hover:bg-white/5 transition-colors rounded font-medium">
                            <ion-icon name="log-out-outline" class="align-middle"></ion-icon>
                            Logout
                        </button>
                    </form>
                </div>
            @else
                <!-- Guest Links Mobile -->
                <div class="border-t border-white/10 mt-3 pt-3">
                    <a href="{{ route('login') }}" class="block py-3 px-4 text-slate-300 hover:text-amber-400 hover:bg-white/5 transition-colors rounded font-medium">
                        <ion-icon name="log-in-outline" class="align-middle"></ion-icon>
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="block py-3 px-4 text-amber-400 hover:text-amber-300 hover:bg-white/5 transition-colors rounded font-medium">
                        <ion-icon name="person-add-outline" class="align-middle"></ion-icon>
                        Register
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu?.classList.toggle('hidden');
    });
</script>
