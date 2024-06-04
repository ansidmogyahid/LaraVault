<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Laravel Starter' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')

</head>
<body class="font-sans antialiased bg-white/80">

    <div class="flex">

        <!-- Sidebar -->
        <x-navigations.sidebar />

        <!-- Main Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

    </div>

</body>
</html>
