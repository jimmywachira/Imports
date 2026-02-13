<footer class="bg-gradient-to-r from-blue-950 to-blue-900 border-t border-blue-800 text-blue-100 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <!-- Brand -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-yellow-300 rounded-lg flex items-center justify-center">
                        <span class="text-blue-900 font-bold text-lg">X</span>
                    </div>
                    <span class="text-xl font-bold">Xplore</span>
                </div>
                <p class="text-blue-400 text-sm">Premium Japanese car imports with full transparency and KEBS compliance.</p>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-blue-800 hover:bg-amber-400 rounded-lg flex items-center justify-center transition">
                        <ion-icon name="logo-facebook" class="text-xl"></ion-icon>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-800 hover:bg-amber-400 rounded-lg flex items-center justify-center transition">
                        <ion-icon name="logo-twitter" class="text-xl"></ion-icon>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-800 hover:bg-amber-400 rounded-lg flex items-center justify-center transition">
                        <ion-icon name="logo-instagram" class="text-xl"></ion-icon>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-800 hover:bg-amber-400 rounded-lg flex items-center justify-center transition">
                        <ion-icon name="logo-linkedin" class="text-xl"></ion-icon>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="font-semibold text-lg">Quick Links</h3>
                <ul class="space-y-2">
                    {{-- <li><a href="{{ route('home') }}" class="text-blue-300 hover:text-amber-400 transition">Home</a></li> --}}
                    <li><a href="{{ route('cars') }}" class="text-blue-300 hover:text-amber-400 transition">Browse Cars</a></li>
                    <li><a href="{{ route('about') }}" class="text-blue-300 hover:text-amber-400 transition">About Us</a></li>
                    <li><a href="{{ route('advisory') }}" class="text-blue-300 hover:text-amber-400 transition">Advisory</a></li>
                    <li><a href="{{ route('contact') }}" class="text-blue-300 hover:text-amber-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="space-y-4">
                <h3 class="font-semibold text-lg">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('inspection') }}" class="text-blue-300 hover:text-amber-400 transition">Inspection Reports</a></li>
                    <li><a href="{{ route('shipping') }}" class="text-blue-300 hover:text-amber-400 transition">Shipping & Clearing</a></li>
                    <li><a href="{{ route('history') }}" class="text-blue-300 hover:text-amber-400 transition">Vehicle History</a></li>
                    <li><a href="{{ route('tradein') }}" class="text-blue-300 hover:text-amber-400 transition">Trade-In Program</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h3 class="font-semibold text-lg">Contact Info</h3>
                <ul class="space-y-3 text-blue-300">
                    <li class="flex items-start gap-3">
                        <ion-icon name="call-outline" class="text-amber-400 flex-shrink-0 mt-1"></ion-icon>
                        <span>+254 700 123 456</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <ion-icon name="mail-outline" class="text-amber-400 flex-shrink-0 mt-1"></ion-icon>
                        <span>info@xplorecar.com</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <ion-icon name="location-outline" class="text-amber-400 flex-shrink-0 mt-1"></ion-icon>
                        <span>Nairobi, Kenya</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-blue-800 pt-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-blue-400">
                <p>&copy; 2026 Xplore Car Imports. All rights reserved.</p>
                <div class="flex gap-4 justify-center">
                    <a href="{{ route('privacy') }}" class="hover:text-amber-400 transition">Privacy Policy</a>
                    <a href="{{ route('terms') }}" class="hover:text-amber-400 transition">Terms of Service</a>
                </div>
                <p class="text-right">KEBS 8-Year Compliance Verified</p>
            </div>
        </div>
    </div>
</footer>
