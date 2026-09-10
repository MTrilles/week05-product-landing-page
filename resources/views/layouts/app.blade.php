<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minute Burger - Everyday Happy Time!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-amber-50 text-stone-800 antialiased">
    
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>