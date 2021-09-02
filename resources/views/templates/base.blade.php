<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
    <script src="{{ mix('/js/app.js')}}"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>DC</title>
</head>
<body>
    
    <header>
        @include('templates.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('templates.footer')
    </footer>


</body>
</html>