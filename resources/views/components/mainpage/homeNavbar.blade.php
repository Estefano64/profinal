<nav class="fixed top-0 left-0 w-full z-50 flex flex-wrap items-center justify-between p-3 bg-[#F2F2F2]">
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
        <a href="{{ route('establecimiento') }}" class="block md:inline-block hover:text-[#CC1D14] px-3 py-3 md:border-none">Establecimientos
        </a>
        <a href="{{ route('contacto') }}" class="block md:inline-block hover:text-[#CC1D14] px-3 py-3 md:border-none">Contacto
        </a>
        <a href="{{ route('quienes-somos') }}" class="block md:inline-block hover:text-[#CC1D14] px-3 py-3 md:border-none">Sobre Nosotros
        </a>
        
    </div>

    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        <a href="tel:+123">
            <div class="flex justify-end">


                <div class="flex items-center gap-2">


                <button>
                    <a href="{{ route('login') }}" class="hidden px-4 py-2 text-xs font-bold uppercase text-white bg-gradient-to-tr from-[#CC1D14] to-[#CC1D14] rounded-lg shadow-md transition-all hover:shadow-lg active:opacity-85 lg:inline-block" type="button">
                        Iniciar Sesión
                    </a>
                </button>
            </div>
            </div>
        </a>
    </div>

</nav>
<br/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.js"></script>