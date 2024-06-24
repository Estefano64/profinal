<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h1 class="text-lg leading-6 font-medium text-gray-900">Pollería Miguelón</h1>
        <h3 class="text-lg leading-6 font-medium text-gray-900 mt-2">Información de Contacto:</h3>
    </div>
    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Teléfono</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $phone }}</dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Dirección</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $address }}</dd>
            </div>

            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Encargado de Tienda</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">Ulises Soto Neyra</dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Redes Sociales</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                    <ul class="flex gap-4">
                        <li>
                            <a href="https://www.facebook.com" target="_blank" class="text-blue-600 hover:underline flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 2H6a4 4 0 00-4 4v12a4 4 0 004 4h6v-7H9V9h5V7a3 3 0 013 3h2v2h-2a1 1 0 00-1 1v3h3a4 4 0 004-4V6a4 4 0 00-4-4z" clip-rule="evenodd" />
                                </svg>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" class="text-purple-600 hover:underline flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4 14.5c0 .3-.2.5-.5.5H8.5c-.3 0-.5-.2-.5-.5V10c0-.3.2-.5.5-.5h7c.3 0 .5.2.5.5v6.5z"/><circle cx="12" cy="6.5" r="1.5"/>
                                </svg>
                                Instagram
                            </a>
                        </li>
                    </ul>
                </dd>
            </div>

            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Horario de Atención</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                    <ul class="divide-y divide-gray-200">
                        <li class="flex justify-between py-1">
                            <span>Lunes a Viernes</span>
                            <span>06:30 - 23:00</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Sábado</span>
                            <span>06:30 - 23:00</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <span>Domingo</span>
                            <span>06:30 - 23:00</span>
                        </li>
                    </ul>
                </dd>
            </div>

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Características</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 flex items-center">
                    <ul class="flex gap-4">
                        <li>
                            <img src="{{ asset('images/delivery-icon.png') }}" alt="Entrega a domicilio" class="w-6 h-6">
                            <span class="ml-2">Entrega a domicilio</span>
                        </li>
                        <li>
                            <img src="{{ asset('images/takeaway.png') }}" alt="Para llevar" class="w-6 h-6">
                            <span class="ml-2">Para llevar</span>
                        </li>
                    </ul>
                </dd>
            </div>

        </dl>
    </div>
</div>
