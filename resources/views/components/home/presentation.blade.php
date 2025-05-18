{{-- Composant Présentation : section présentation de l'entreprise + carrousel Swiper sur la page d'accueil --}}
<section class="py-24 bg-white">
    <div class="container px-4 mx-auto">
        {{-- Titre principal de la section --}}
        <h2 class="mb-20 text-4xl font-bold text-center text-gray-900 md:text-5xl">Bienvenue sur Ecoride</h2>
        <div class="flex flex-col items-start gap-8 lg:flex-row lg:gap-16">
            {{-- Bloc texte de présentation --}}
            <div class="w-full lg:w-1/2">
                <p class="mb-8 text-lg leading-relaxed text-gray-600 md:text-xl">
                    Ecoride est la première plateforme de covoiturage écologique en France. Notre mission est de rendre les déplacements plus durables et accessibles à tous.
                </p>
                <p class="mb-10 text-lg leading-relaxed text-gray-600 md:text-xl">
                    Que vous soyez conducteur ou passager, Ecoride vous permet de partager vos trajets quotidiens, de réduire vos dépenses et de contribuer à la protection de l'environnement.
                </p>
                <p class="mb-10 text-lg leading-relaxed text-gray-600 md:text-xl">
                    Rejoignez une communauté de covoiturage écologique et de partage de trajets.
                </p>
            
            </div>
            {{-- Bloc carrousel Swiper --}}
            <div class="w-full lg:w-1/2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        {{-- Slide 1 --}}
                        <div class="swiper-slide">
                            <img src="{{ asset('images/carousel-1.jpg') }}" alt="Covoiturage urbain">
                            <div class="slide-content">
                                <h3 class="mb-2 text-3xl font-bold">Covoiturage Urbain</h3>
                                <p class="text-lg">Partagez vos trajets quotidiens en ville</p>
                            </div>
                        </div>
                        {{-- Slide 2 --}}
                        <div class="swiper-slide">
                            <img src="{{ asset('images/carousel-2.jpg') }}" alt="Trajets quotidiens">
                            <div class="slide-content">
                                <h3 class="mb-2 text-3xl font-bold">Trajets Quotidiens</h3>
                                <p class="text-lg">Économisez sur vos déplacements réguliers</p>
                            </div>
                        </div>
                        {{-- Slide 3 --}}
                        <div class="swiper-slide">
                            <img src="{{ asset('images/carousel-3.jpg') }}" alt="Communauté Ecoride">
                            <div class="slide-content">
                                <h3 class="mb-2 text-3xl font-bold">Communauté Active</h3>
                                <p class="text-lg">Rejoignez des milliers d'utilisateurs</p>
                            </div>
                        </div>
                    </div>
                    {{-- Pagination et flèches du carrousel --}}
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================
     SECTION PRÉSENTATION ACCUEIL
====================== --> 