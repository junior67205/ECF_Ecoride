<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 z-50 w-full bg-white shadow-sm">
    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between h-20">
            {{-- Logo du site --}}
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo-ecoride.png') }}" alt="Logo Ecoride" class="h-20" />
            </a>
            {{-- Menu hamburger pour mobile --}}
            <button id="menuButton" class="p-2 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            {{-- Menu de navigation --}}
            <div id="navMenu" class="fixed inset-0 z-50 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out transform -translate-x-full bg-white md:relative md:translate-x-0 md:flex-row md:space-x-8 md:bg-transparent">
                <button id="closeMenu" class="absolute p-2 top-4 right-4 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <a href="/" class="px-4 py-2 text-lg font-medium text-gray-700 transition-colors hover:text-emerald-600">Accueil</a>
                <a href="/covoiturage" class="px-4 py-2 text-lg font-medium text-gray-700 transition-colors hover:text-emerald-600">Covoiturage</a>
                <a href="/contact" class="px-4 py-2 text-lg font-medium text-gray-700 transition-colors hover:text-emerald-600">Contact</a>
                <div class="flex flex-col items-center gap-4 mt-4 md:flex-row md:mt-0">
                    <a href="/connexion" class="px-6 py-2 text-lg font-medium transition-colors border-2 rounded-lg text-emerald-600 border-emerald-600 hover:bg-emerald-50">Connexion</a>
                    <a href="/inscription" class="px-6 py-2 text-lg font-medium text-white transition-all rounded-lg bg-emerald-600 hover:bg-emerald-700 hover:shadow-lg">Inscription</a>
                </div>
            </div>
        </div>
    </div>
</nav> 