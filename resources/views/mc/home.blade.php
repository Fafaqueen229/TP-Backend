@extends('app')

@section('title', 'Accueil')

@section('content')
<style>
    #img {
        min-height: 50vh;
    }

    @media (min-width: 640px) {
        #img {
            min-height: 100vh;
        }
    }

    @media (min-width: 1536px) {
        #img {
            min-height: 50vh;
        }
    }
</style>
<div id="part" class="max-w-screen-2xl mx-auto">
    <div id="carousel-item-1" class="relative block md:flex items-center" style="min-height: 50vh;">
        <div id="img" class="relative w-full md:w-2/5 h-full overflow-hidden md:-t-none">
            <img class="absolute inset-0 w-full h-full object-cover object-center" src="img/cover.png" alt="">
            <div class="absolute inset-0 w-full h-full bg-black opacity-75"></div>
            <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
                <h3 class="font-medium text-5xl uppercase font-sans tracking-[-.2rem] pl-16">Strategie de marque
                </h3>
            </div>
        </div>
        <div class="w-full md:w-3/5 h-full flex items-center">
            <div class="p-12 md:pr-24 md:pl-16 md:py-12 h-full overflow-hidden">
                <p class="text-gray-600 text-4xl font-medium capitalize">
                    Clarifier le pourquoi de votre marque et définir des objectifs pertinents
                </p>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12"
                viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>
    </div>
</div>
<div id="projets">
    <section>
        <div class="max-w-screen-2xl px-4 x py-8 mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Nos projets</h2>
                <p class="mt-4 text-justify">
                    Chez Studio MC&Co, nous creons des strategies de marque qui englobent tous les points de
                    contacts d'une experience client: l'identite de la marque, comment elle sonne, ses produits et
                    comment vous la ressentez a la fois en ligne et dans la vie reele. nous veillons a ce que le
                    resultat soit durable sur le long terme,consciencieux et minutieux.
                </p>
            </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-8">
                <li class="hover:scale-95 duration-500">
                    <a href="/projet">
                        <div>
                            <img src="/img/cm/cm_1.png" alt="" class="">
                        </div>
                        <div class="p-6 space-y-3 bg-white">
                            <h3 class="text-lg text-gray-800">Le club des Minions</h3>
                            <p class="text-xl text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </a>
                </li>
                <li class="hover:scale-95 duration-500">
                    <a href="/projet">
                        <div>
                            <img src="/img/cm/cm_2.png" alt="" class="">
                        </div>
                        <div class="p-6 space-y-3 bg-white">
                            <h3 class="text-lg text-gray-800">Le club des Minions</h3>
                            <p class="text-xl text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </a>
                </li>
                <li class="hover:scale-95 duration-500">
                    <a href="/projet">
                        <div>
                            <img src="/img/cm/cm_3.jpg" alt="" class="">
                        </div>
                        <div class="p-6 space-y-3 bg-white">
                            <h3 class="text-lg text-gray-800">Le club des Minions</h3>
                            <p class="text-xl text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </a>
                </li>
                <li class="hover:scale-95 duration-500 hidden lg:hidden xl:block">
                    <a href="/projet">
                        <div>
                            <img src="/img/cm/cm_1.png" alt="" class="">
                        </div>
                        <div class="p-6 space-y-3 bg-white">
                            <h3 class="text-lg text-gray-800">Le club des Minions</h3>
                            <p class="text-xl text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-8 items-center justify-center flex   ">
            <a href="/projets#projets"
                class="block px-5 py-3 font-medium text-black bg-transparent border-2 border-black rounded-lg shadow-sm hover:bg-black hover:text-white duration-500">
                Voir plus
            </a>
        </div>
    </section>
</div>
<div id="partenaires">
    <section>
        <div class="max-w-screen-2xl px-4 py-8 mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Nos partenaires</h2>

                <p class="mt-4  text-justify">
                    Nous créons des stratégies de marque qui englobent tous les points de contact d’une expérience
                    client réussie.
                </p>
            </div>
            <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-12 items-center">
                <a href="" class="p-4 rounded flex justify-center h-[7rem]">
                    <img src="/img/logo/aced.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-[7rem]">
                    <img src="/img/logo/doko.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-[8rem]">
                    <img src="/img/logo/minion.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-[7rem]">
                    <img src="/img/logo/joli.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-[7rem]">
                    <img src="/img/logo/lala.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-[7rem]">
                    <img src="/img/logo/rbl.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-20">
                    <img src="/img/logo/silobile.png" alt="">
                </a>

                <a href="" class="p-4 rounded flex justify-center h-16">
                    <img src="/img/logo/yana.png" alt="">
                </a>
            </div>
        </div>
    </section>
</div>
<div id="strat">
    <section class="bg-yellow-50/20">
        <div class="max-w-screen-2xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
                    Nos outils
                </h2>

                <p class="max-w-4xl mx-auto mt-4  text-justify">
                    Nous créons des stratégies de marque qui englobent tous les points de contact d’une expérience
                    client réussie.
                </p>
            </div>

            <div class="my-8">
                <img src="/img/group.png" alt="" class="mx-auto">
            </div>
        </div>
    </section>
</div>
<div id="testimonials">
    <section class="bg-white">
        <div class="max-w-screen-2xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
                    Retours d’expérience
                </h2>

                <p class="mx-auto mt-4  text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    praesentium natus sapiente commodi. Aliquid sunt tempore iste
                    repellendus explicabo dignissimos placeat, autem harum dolore
                    reprehenderit quis! Quo totam dignissimos.
                </p>

            </div>
        </div>
        <div
            class="{{-- grid grid-cols-1 gap-8 mt-16 sm:grid-cols-2 lg:grid-cols-3 sm:gap-16 --}} mt-8 flex overflow-x-scroll scrwi p-2 space-x-8">

            @php
            $pp = ' <div>
                <img src="/img/test.jpg" alt="" class="object-cover w-24 h-24 mx-auto rounded-full shadow-md" />

                <blockquote class="flex flex-col justify-between p-12 -mt-6 text-center rounded-lg shadow-md">
                    <p class="text-lg font-bold text-gray-700">Katie</p>
                    <p class="mt-1 text-xs font-medium text-gray-500">
                        Digital Marketing at Studio
                    </p>
                    <p class="mt-4 text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                        voluptatem alias ut provident sapiente repellendus.
                    </p>

                    <div class="flex space-x-0.5 justify-center mt-8 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="#f39719">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="#f39719">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="#f39719">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="#f39719">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="#f39719">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </blockquote>
            </div>
            ';
            for ($x=0; $x < 12 ; $x++) { echo $pp; } @endphp </div>

        </div>
    </section>
</div>
{{-- <div id="temoin">

    <div class="container mx-auto w-full overflow-hidden relative">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0"
                style="background: linear-gradient(to right, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="w-1/4 h-full absolute z-50 right-0"
                style="background: linear-gradient(to left, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
        </div>

        <div class="carousel-items flex items-center justify-center gap-4"
            style="width: fit-content; animation: carouselAnim 10s infinite alternate linear;">

            @php

            for ($x=0; $x < 6 ; $x++) { echo $pp; } @endphp </div>

        </div>
        <style>
            @keyframes carouselAnim {
                from {
                    transform: translate(0, 0);
                }

                to {
                    transform: translate(calc(-100% + (6*300px)));
                }
            }

            @media only screen and (max-width: 768px) {
                .container .carousel-items {
                    animation: carouselAnim 60s infinite alternate linear;
                }

                @keyframes carouselAnim {
                    from {
                        transform: translate(0, 0);
                    }

                    to {
                        transform: translate(calc(-100% + (5*300px)));
                    }
                }
            }

            .carousel-focus:hover {
                transition: all 0.8s;
                transform: scale(1.1);
            }
        </style>
    </div> --}}
    @endsection




    <!--
<div id="us">
    <section class="">
        <div class="max-w-screen-2xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Que faisons-nous ?</h2>

                <p class="mt-4">
                    MC&Co est un studio de Communications Marketing.
                    Nous sommes spécialisés dans la création et la
                    revitalisation de marques.

                    Que ce soit pour un produit, une entreprise ou un événement,
                    nous collaborons avec nos clients pour:
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2">
                <a class="block p-8 transition border shadow-sm rounded-xl hover:shadow-bouff-primaryone/10 hover:border-bfprishadow-bouff-primaryone/10"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-bouff-primaryone" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold">Stratégie de marque</h3>

                    <p class="mt-1 text-sm">
                        Clarifier le pourquoi de votre marque et définir des objectifs pertinents
                    </p>
                </a>

                <a class="block p-8 transition border shadow-sm rounded-xl hover:shadow-bouff-primaryone/10 hover:border-bfprishadow-bouff-primaryone/10"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-bouff-primaryone" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold">Relations publiques/Médias</h3>

                    <p class="mt-1 text-sm">
                        Gérer la réputation de votre marque, auprès de votre public cible
                    </p>
                </a>

                <a class="block p-8 transition border shadow-sm rounded-xl hover:shadow-bouff-primaryone/10 hover:border-bfprishadow-bouff-primaryone/10"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-bouff-primaryone" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold">Content/Digital Marketing</h3>

                    <p class="mt-1 text-sm">
                        Donner vie à votre marque, à travers de la création de contenus et un plan de communication
                        digitale pertinent
                    </p>
                </a>

                <a class="block p-8 transition border shadow-sm rounded-xl hover:shadow-bouff-primaryone/10 hover:border-bfprishadow-bouff-primaryone/10"
                    href="/services/digital-campaigns">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-bouff-primaryone" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h3 class="mt-4 text-xl font-bold">Publicité</h3>

                    <p class="mt-1 text-sm">
                        Faire accroître la notoriété de votre marque, via divers canaux
                    </p>
                </a>
            </div>

            {{-- <div class="mt-12 text-center">
                <a class="inline-flex items-center px-8 py-3 mt-8 bg-bouff-primaryone  text-white border border-orange-500 rounded hover:bg-transparent active:text-bouff-primaryone hover:text-bouff-primaryone"
                    href="/get-started">
                    <span class="text-sm font-medium"> Get Started </span>

                    <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div> --}}
        </div>
    </section>
</div>
-->
