<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    @vite('resources/sass/app.scss')
</head>

<body class="overflow-x-hidden">
    @include('layouts.nav')
    @yield('content')
    @include('sweetalert::alert')
    @vite('resources/js/app.js')
</body>

</html>
