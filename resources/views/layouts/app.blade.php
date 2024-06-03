<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Add your CSS and JS files here -->
</head>
<body>
    <nav>
        <!-- Add your navigation bar here -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Add your footer here -->
    </footer>
</body>
</html>
