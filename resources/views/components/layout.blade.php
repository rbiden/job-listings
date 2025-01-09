<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings - Powered by Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />
    <main class="p-6 lg:px-20">
        {{ $slot }}
    </main>
</body>

</html>
