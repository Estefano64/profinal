<x-mainpage.partes.titlePage>

    Combos exclusivos para ti y para mi
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPareja')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mediopollo.png') }}
        </x-slot>
        1/2 POLLO CLÁSICO

        <x-slot name="description">

            Pollo + papas fritas + aguadito + ensalada


        </x-slot>
        <x-slot name="price">
            s/32.99
        </x-slot>

    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPareja')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mediomiguelon.png') }}
        </x-slot>
        1/2 POLLO MIGUELÓN




        <x-slot name="description">
            Pollo + papa andina ó papa criolla + aguadito + mollejitas fritas + chorizo + ensalada
        </x-slot>
        <x-slot name="price">
            s/37.99
        </x-slot>

    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPareja')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/mediopollocombinado.png') }}
        </x-slot>
        1/2 POLLO COMBINADO

        <x-slot name="description">
            Pollo + papas fritas + aguadito + ensalada
        </x-slot>
        <x-slot name="price">
            s/32.99
        </x-slot>

    </x-mainpage.partes.card>





</section>

<x-mainpage.partes.subTitle>
    Combos que te pueden interesar
</x-mainpage.partes.subTitle>

<x-mainpage.partes.comboHome>

</x-mainpage.partes.comboHome>

<x-mainpage.partes.category>

</x-mainpage.partes.category>