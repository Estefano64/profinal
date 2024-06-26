<x-mainpage.partes.titlePage>
    Siempre hay espacio para un capricho mas
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('extras')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/aguadito.png') }}
        </x-slot>
        AGUADITO EXTRA


        <x-slot name="description">
        AGUADITO EXTRA
        </x-slot>
        <x-slot name="price">
            s/6.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('extras')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/caldo-gallina.jpg') }}
        </x-slot>
        CALDO DE GALLINA


        <x-slot name="description">
        CALDO DE GALLINA
        </x-slot>
        <x-slot name="price">
            s/11.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('extras')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/hotdog.png') }}
        </x-slot>
        SANDWICH DE HOT DOG


        <x-slot name="description">
        SANDWICH DE HOT DOG
        </x-slot>
        <x-slot name="price">
            s/3.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('extras')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/hamburguesa.png') }}
        </x-slot>
        SANDWICH DE HAMBURGUESA
        <x-slot name="description">
        SANDWICH DE HAMBURGUESA
        </x-slot>
        <x-slot name="price">
            s/4.99
        </x-slot>
    </x-mainpage.partes.card>

    

</section>


<x-mainpage.partes.category>

</x-mainpage.partes.category>