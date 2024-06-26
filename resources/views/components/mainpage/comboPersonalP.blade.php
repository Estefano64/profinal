<x-mainpage.partes.titlePage>
    Combos exclusivos para ti
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/cuartopollomiguelon.png') }}
        </x-slot>
        1/4 DE POLLO MIGUELON
        <x-slot name="description">
            Pollo + papa andina ó papa criolla + aguadito + mollejitas fritas + chorizo + ensalada
        </x-slot>
        <x-slot name="price">
            s/22.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/octavomiguelon.png') }}
        </x-slot>
        1/8 POLLO MIGUELÓN
        <x-slot name="description">
        Pollo + papa andina ó papa criolla + aguadito + mollejitas fritas + chorizo + ensalada
        </x-slot>
        <x-slot name="price">
            s/17.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/octavocombinado.png') }}
        </x-slot>
        1/8 POLLO COMBINADO
        <x-slot name="description">
        
        1/4 Pollo + papas fritas + arroz chaufa + tallarin + hot dog
        </x-slot>
        <x-slot name="price">
            s/12.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/cuartopollo.png') }}
        </x-slot>
        1/4 POLLO CLÁSICO
        <x-slot name="description">    
        Pollo + papas fritas + aguadito + ensalada
        </x-slot>
        <x-slot name="price">
            s/17.99
        </x-slot>
    </x-mainpage.partes.card>

    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/platillos/octavopollo.png') }}
        </x-slot>
        1/8 POLLO CLÁSICO
        <x-slot name="description">
        
        Pollo + papas fritas + aguadito + ensalada
        </x-slot>
        <x-slot name="price">
            s/11.99
        </x-slot>
    </x-mainpage.partes.card>



    <x-mainpage.partes.card>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/combopersonal.png') }}
        </x-slot>
        COMBO PERSONAL
        <x-slot name="description">
            esta es una descripcion de combos Personales
        </x-slot>
        <x-slot name="price">
            s/19.99
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