<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developers Best Friend' --}}
        @yield('title','Developer\'s Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    @yield('head')

</head>
<body>

    <header>
    </header>

    <nav>
        <ul>
            <li><a href='/lipsum'>Lorem Ipsum Generator</a></li>
            <li><a href='/users'>Users Generator</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @yield('body')

</body>
</html>
