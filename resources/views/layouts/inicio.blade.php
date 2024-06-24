<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miguelon</title>
    <script src="https://cdn.tailwindcss.com"></script>

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