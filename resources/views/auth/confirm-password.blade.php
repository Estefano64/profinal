<x-guest-layout> // Define un layout para páginas accesibles para invitados (no autenticados)
    <x-authentication-card> // Utiliza un componente de tarjeta de autenticación para estructurar el contenido
        <x-slot name="logo"> // Define un slot llamado 'logo' para personalizar el logo en la tarjeta de autenticación
            <x-authentication-card-logo /> // Incluye un componente para mostrar el logo de autenticación
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }} // Muestra un mensaje indicando que es un área segura y solicita la confirmación de la contraseña antes de continuar
        </div>

        <x-validation-errors class="mb-4" /> // Incluye un componente para mostrar errores de validación, si los hay

        <form method="POST" action="{{ route('password.confirm') }}"> // Formulario que envía los datos mediante el método POST a la ruta 'password.confirm'
            @csrf // Token CSRF para proteger el formulario contra ataques de falsificación de solicitud entre sitios

            <div>
                <x-label for="password" value="{{ __('Password') }}" /> // Etiqueta para el campo de contraseña
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus /> // Campo de entrada para la contraseña
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Confirm') }} // Botón para confirmar la acción, etiquetado con el texto 'Confirm'
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

