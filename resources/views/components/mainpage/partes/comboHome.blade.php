<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">


    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('comboPersonal')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/combopersonal.png') }}
        </x-slot>
        COMBOS PERSONALES

    </x-mainpage.partes.cart>

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('comboPareja')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/comboparados.jpg') }}
        </x-slot>
        COMBOS PARA 2

    </x-mainpage.partes.cart>

    <x-mainpage.partes.cart>
        <x-slot name="link">
            {{ route('comboFamiliar')}}
        </x-slot>

        <x-slot name="img">
            {{ asset('imghome/combofamiliar.jpg') }}
        </x-slot>
        COMBOS FAMILIARES

    </x-mainpage.partes.cart>


</section>