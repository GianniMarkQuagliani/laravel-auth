<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.css' integrity='sha512-imTMcrMfwTWMwbgH3ComWWGCoDCo2jO1Qrvoa7B/Kcy7MrP5XMojK/Ede5uYofzcYyx4aFXdwzsm1QxdQXZreg==' crossorigin='anonymous'/>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Admin</title>
</head>
<body>

    @include('admin.partials.header')

    <div class="main-wrapper d-flex">
        @include('admin.partials.sidebar')
        <div class="p-5 w-100">
            @yield('content')
        </div>

    </div>


</body>
</html>
