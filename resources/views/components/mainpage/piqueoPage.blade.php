<x-mainpage.partes.titlePage>
    Un manjar tan sencillo pero a la vez eficaz
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/salchipaparoyal.png') }}
        </x-slot>
        SALCHIPAPA ROYAL



        <x-slot name="description">
        papa + huevo + hot dog + ensalada
        </x-slot>
        <x-slot name="price">
            s/8.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/salchipapa.png') }}
        </x-slot>
        SALCHIPAPA CLÁSICA



        <x-slot name="description">
        papa + hot dog
        </x-slot>
        <x-slot name="price">
            s/6.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/salchipapa.png') }}
        </x-slot>
        SALCHIPAPA COMBINADO AL GUSTO


        <x-slot name="description">
        papa + hot dog
        </x-slot>
        <x-slot name="price">
            s/7.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/salchipapa-andina.png') }}
        </x-slot>
        SALCHIPAPA CON PAPITAS ANDINAS
        <x-slot name="description">
        papa + hot dog
        </x-slot>
        <x-slot name="price">
            s/6.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mollejitas.png') }}
        </x-slot>
        MOLLEJITAS FRITAS 
        <x-slot name="description">
        mollejitas fritas + papa + ensalada
        </x-slot>
        <x-slot name="price">
            s/12.99
        </x-slot>
    </x-mainpage.partes.card>
    
    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('piqueos')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mollejitascombinado.png') }}
        </x-slot>
        MOLLEJITAS FRITAS 
        <x-slot name="description">
        mollejitas fritas + combinado
        </x-slot>
        <x-slot name="price">
            s/12.99
        </x-slot>
    </x-mainpage.partes.card>




</section>


<x-mainpage.partes.category>

</x-mainpage.partes.category>