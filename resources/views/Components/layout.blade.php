<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <nav>
        <x-nav-link></x-nav-link>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </nav>

    {{ $slot }}
</body>

</html>