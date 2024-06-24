<nav class="fixed top-0 left-0 w-full z-50 flex flex-wrap items-center justify-between p-3 bg-[#e8e8e5]">
    <a href="{{ route('home') }}" class="mr-4 flex items-center py-1.5 font-sans text-base font-medium leading-relaxed text-black antialiased">
        <img src="{{ asset('images/logoHeader.png') }}" alt="Logo de Polleria Miguelon" class="h-16 w-auto mr-2">

    </a>

    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div class=" toggle hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 md:border-none">
        <a href="#home" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Establecimientos
        </a>
        <a href="#services" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Contacto
        </a>
        <a href="#aboutus" class="block md:inline-block hover:text-blue-500 px-3 py-3 md:border-none">Sobre Nosotros
        </a>
 
    </div>

    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        <a href="tel:+123">
            <div class="flex justify-end">


                <div class="flex items-center gap-2">
                <button onclick="window.location.href='{{ route('register') }}'" class="hidden px-4 py-2 text-xs font-bold uppercase text-black transition-all rounded-lg hover:bg-gray-900/10 active:bg-gray-900/20 lg:inline-block" type="button">
                    Registrarme
                </button>
                <button onclick="window.location='{{ route('login') }}'" class="hidden px-4 py-2 text-xs font-bold uppercase text-white bg-[#c8a876] from-gray-900 to-gray-800 rounded-lg shadow-md transition-all hover:shadow-lg active:opacity-85 lg:inline-block" type="button">
                    Iniciar Sesión
                </button>
            </div>
            </div>
        </a>
    </div>

</nav>