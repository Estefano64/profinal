<x-mainpage.partes.titlePage>
    Una fucion de sabores que nunca olvidaras
</x-mainpage.partes.titlePage>

<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

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
            {{ asset('imghome/platillos/pollobroaster.png') }}
        </x-slot>
        POLLO BROASTER

        <x-slot name="description">
        
        Pollo broaster + papa + ensalada
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
            {{ asset('imghome/platillos/broastercombinado.png') }}
        </x-slot>
        POLLO BROASTER COMBINADO

        <x-slot name="description">
        
        Pollo broaster combinado
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
            {{ asset('imghome/platillos/broastermiguelon.png') }}
        </x-slot>
        POLLO BROASTER MIGUELÓN 

        <x-slot name="description">
        
        Pollo broaster + chorizo + hot dog + molleja
        </x-slot>
        <x-slot name="price">
            s/11.99
        </x-slot>
    </x-mainpage.partes.card>

    




</section>


<x-mainpage.partes.category>

</x-mainpage.partes.category>