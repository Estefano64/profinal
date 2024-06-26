<nav class="sticky top-0 z-10 w-full px-4 py-2 border-none shadow-md bg-white bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center justify-between">
        <a href="{{ route('home') }}" class="mr-4 flex items-center py-1.5 font-sans text-base font-medium leading-relaxed text-black antialiased">
            <img src="{{ asset('images/logoHeader.png') }}" alt="Logo de Polleria Miguelon" class="h-16 w-auto mr-2">




        </a>
        <div class="flex items-center gap-4">
            <div class="hidden lg:block">
                <ul class="flex gap-6">
                    <li class="p-1 font-sans text-sm font-normal leading-normal text-black">



                    <a href="{{ route('establecimiento') }}" class="flex items-center">
                            Establecimiento
                         </a>
                    </li>
                    <li class="p-1 font-sans text-sm font-normal leading-normal text-black">
                        <a href="{{ route('quienes-somos') }}" class="flex items-center">
                            Quiénes somos
                         </a>

                    </li>
                    <li class="p-1 font-sans text-sm font-normal leading-normal text-black">
                        <a href="{{ route('contacto') }}" class="flex items-center">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>



            <button class="lg:hidden ml-auto h-6 w-6 text-black" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>