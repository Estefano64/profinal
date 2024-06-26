

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('brasas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/brasas.jpg') }}
        </x-slot>
        BRASAS

    </x-mainpage.partes.cart>



    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/salchipapa.png') }}
        </x-slot>
        PIQUEOS

    </x-mainpage.partes.cart>

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('extras')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/extras.jpg') }}
        </x-slot>
        ACOMPAÑAMIENTOS

    </x-mainpage.partes.cart>

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('combinados')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/combinados.jpg') }}
        </x-slot>
        COMBINADOS

    </x-mainpage.partes.cart>

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/bebidas.jpg') }}
        </x-slot>
        BEBIDAS

    </x-mainpage.partes.cart>


</section>