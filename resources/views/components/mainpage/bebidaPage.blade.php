<x-mainpage.partes.titlePage>
    Refrescate con con las mejores bebidas
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/te.png') }}
        </x-slot>
        TÉ
        <x-slot name="description">
        vazo/taza
        </x-slot>
        <x-slot name="price">
            s/1.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mate.png') }}
        </x-slot>
        MATE
        <x-slot name="description">
        vazo/taza
        </x-slot>
        <x-slot name="price">
            s/1.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/tecacao.png') }}
        </x-slot>
        MATE DE CACAO
        <x-slot name="description">
            vazo/taza
        </x-slot>
        <x-slot name="price">
            s/1.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/chicha.png') }}
        </x-slot>
        CHICHA MORADA
        <x-slot name="description">
            1 jarra de 1L
        </x-slot>
        <x-slot name="price">
            s/5.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/incakola.png') }}
        </x-slot>
        INKA KOLA
        <x-slot name="description">
            Gaseosa personal
        </x-slot>
        <x-slot name="price">
            s/3.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/cocacola.png') }}
        </x-slot>
        COCA COLA
        <x-slot name="description">
        Gaseosa personal
        </x-slot>
        <x-slot name="price">
            s/3.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/fanta.png') }}
        </x-slot>
        FANTA
        <x-slot name="description">
        Gaseosa personal
        </x-slot>
        <x-slot name="price">
            s/3.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('bebidas')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/sprite.png') }}
        </x-slot>
        SPRIT
        <x-slot name="description">
        Gaseosa personal
        </x-slot>
        <x-slot name="price">
            s/3.99
        </x-slot>
    </x-mainpage.partes.card>
</section>


<x-mainpage.partes.category>

</x-mainpage.partes.category>