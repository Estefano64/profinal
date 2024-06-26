<x-mainpage.partes.titlePage>
    
    Combos exclusivos para toda familia
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboFamiliar')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/pollo.png') }}
        </x-slot>
        POLLO ENTERO CLÁSICO:

        <x-slot name="description">
        1 Pollo + papas fritas + aguadito + ensalada
        </x-slot>
        <x-slot name="price">
        s/57.99
        </x-slot>

    </x-mainpage.partes.card>


    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboFamiliar')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/pollomiguelon.png') }}
        </x-slot>

POLLO ENTERO MIGUELÓN


        <x-slot name="description">
        1 Pollo + papa andina ó papa criolla + aguadito + mollejitas fritas + chorizo + ensalada        </x-slot>
        <x-slot name="price">
        s/65.99
        </x-slot>

    </x-mainpage.partes.card>


    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboFamiliar')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/pollocombinado.png') }}
        </x-slot>
        POLLO ENTERO COMBINADO


        <x-slot name="description">
        1 Pollo + papas fritas + aguadito + ensalada
        </x-slot>
        <x-slot name="price">
        s/57.99
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