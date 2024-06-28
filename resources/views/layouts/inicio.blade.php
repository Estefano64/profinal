<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miguelon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileMenu = document.getElementById('mobile-menu');

            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.css" rel="stylesheet" />

</head>



<body>
    <x-mainpage.homeNavbar>

    </x-mainpage.homeNavbar>


    <div>
        <main>
            @yield('content')
        </main>

    </div>



</body>

<footer>
    <!-- Componente Footer -->
    <x-mainpage.homeFooter>

    </x-mainpage.homeFooter>

</footer>

</html>