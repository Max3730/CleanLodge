<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Accueil')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

      
           
    </head>
    <body class="w-full h-full">

    <!-- Section pour les grandes écrans -->
        <div class="grand_ecran flex justify-between hidden lg:flex w-full h-full">

                  

            <!-- Section pour les menus -->
                <nav class="navbar bg-gray-200">


                 {{-- Section logo --}}

                    <div class="logo">
                        <a href="" class="flex"><span class="text-gray-900">Clean</span><span class="span2 text-blue-700">Lodge</span></a>
                    </div>

                    <!-- Section pour les menus -->

                    <ul class="ul1 flex flex-col gap-4 lg:flex-row lg:gap-8">

                        {{-- 1 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                                <a href="{{ route('accueil') }}" class="{{ Request::is('/accueil') ?  'text-white' : ''}} text-blue-500">Accueil</a>
                            </li>

                        {{-- 2 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>


                                <a href="" class="text-blue-500">Rechercher un logement</a>
                            </li>

                        {{-- 3 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15ZM9 12.75a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5H9Z" clip-rule="evenodd" />
                                </svg>


                                <a href="" class="text-blue-500">Mes demandes</a>
                            </li>

                        {{-- 4 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>


                                <a href="{{ route('statut') }}" class="text-blue-500">Mon Statut Locatif</a>
                            </li>


                        {{-- Espace Propio/Agence --}}

                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                <a href="{{ route('create') }}" class="text-blue-500">Créer ma page Pro / Agence</a>
                            </li>

                        {{-- Propio --}}
                            <li class="flex g-[2rem] bouge">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>


                                <a href="{{ route('proprio') }}" class="text-blue-500">Espace Propriétaire</a>
                            </li>
                        {{-- Agence --}}
                            <li class="flex g-[2rem] bouge">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                                </svg>


                                <a href="" class="text-blue-500">Espace Agence</a>
                            </li>

                            

                        {{-- 6 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                </svg>


                                <a href="" class="text-blue-500">Signaler un problème</a>
                            </li>

                        {{-- 7 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>



                                <a href="" class="text-blue-500">Notifications</a>
                            </li>

                        {{-- 8 --}}
                            <li class="flex g-[2rem]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>




                                <a href="" class="text-blue-500">Aide / FAQ</a>
                            </li>



                    </ul>  

                 {{-- Section pour deconnexion, theme, profil --}}

            
                

                    <ul class="dethepro">        
                        
                        {{-- Theme --}}
                        <li class="flex g-[2rem]">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>

                            <span class="text-blue-500">Thème</span>
                        
                        </li>

                        {{-- Profil --}}
                        <li class="flex g-[2rem]">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>


                            <a href="{{ route('profile.edit') }}" class="text-blue-500">Profil</a>
                        
                        </li>

                        {{-- Parametre --}}
                        <li class="flex g-[2rem]">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>



                            <a href="{{ route('parametre') }}" class="text-blue-500">Paramètre</a>
                        
                        </li>

                        <li class="flex g-[2rem]">
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>



                            <form method="POST" action="{{ route('logout') }}" class="w-full text-left">
                                @csrf
                                <button type="submit" class="w-full text-left text-red-600 hover:underline">
                                    Déconnexion
                                </button>
                            </form>
                        
                        </li>


                    </ul>
                

                </nav>
            <!-- Contenu de la page active -->
                <div class="contenuprim flex flex-wrap">

            {{-- Contenu --}}
                    <main class="content w-full mt-[5rem] lg:w-3/4 lg:pl-6">

                        @yield('content')
                    </main>

            <!-- Coté affiches publicités et autre -->
                    <div class="informations hidden lg:block w-full lg:w-1/4 p-4">
                        <p class="text-center">Zone infos</p>
                    </div>
                </div>
                

        </div>



      {{-- Section pour les petits écrans --}}
        <div class="lg:hidden relative petit_ecran">
            <!-- Menu fixe en haut -->
            <div class="fixed top-0 left-0 w-full bg-blue-300 shadow z-50 flex items-center justify-between p-4">
                <button id="burger" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                        d="M80 160h352M80 256h352M80 352h352"/>
                    </svg>
                </button>
                <span class="text-xl font-semibold">CleanLodge</span>
            </div>

            <!-- Menu déroulant -->
            <ul id="mobileMenu" class="hidden flex flex-col gap-6 p-4 fixed top-16 left-0 w-full bg-blue-300 h-[calc(100vh-4rem)] overflow-y-auto z-40">

                

                        {{-- 1 --}}
                            <li class="flex ">

                                <a href="{{ route('accueil') }}" class="{{ Request::is('/accueil') ?  'text-white' : ''}}">Accueil</a>
                            </li>

                        {{-- 2 --}}
                            <li class="flex ">

                                <a href="">Rechercher un logement</a>
                            </li>

                        {{-- 3 --}}
                            <li class="flex ">

                                <a href="">Mes demandes</a>
                            </li>

                        {{-- 4 --}}
                            <li class="flex ">

                                <a href="">Mon Statut Locatif</a>
                            </li>

                        {{-- Espace Propio/Agence --}}

                            <li class="flex ">

                                <a href="">Créer ma page Pro / Agence</a>
                            </li>

                        {{-- Propio --}}
                            <li class="flex  bouge">
                         
                                <a href="">Espace Propriétaire</a>
                            </li>
                        {{-- Agence --}}
                            <li class="flex  bouge">
                           
                                <a href="">Espace Agence</a>
                            </li>

                            

                        {{-- 6 --}}
                            <li class="flex ">

                                <a href="">Signaler un problème</a>
                            </li>

                        {{-- 7 --}}
                            <li class="flex">

                                <a href="">Notifications</a>
                            </li>

                        {{-- 8 --}}
                            <li class="flex">
                            
                                <a href="">Aide / FAQ</a>
                            </li>


                        {{-- Section paramet --}}
                        <li class="flex">

                            <a href="{{ route('profile.edit') }}">Profil</a>
                        
                        </li>

                        <li class="flex">

                            <a href="">Paramètre</a>
                        
                        </li>

                        <li class="flex">


                            <a href="{{ route('logout') }}">Déconnexion</a>
                        
                        </li>
                <!-- etc -->
            </ul>

            <!-- Contenu principal mobile (avec un yield séparé) -->
            <main class="pt-20 px-4 petit-content">
                @yield('content_mobile')
            </main>
        </div>



        <script src="{{ asset('scripts/script.js') }}"></script>
        
    </body>
</html>
