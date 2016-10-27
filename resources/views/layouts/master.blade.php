<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developers Best Friend' --}}
        @yield('title','Developer\'s Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <header>
            <h1><a href="/" id="heading_text">Developer's Best Friend</a></h1>
        </header>

        <nav>
            <ul class="list-inline">
                <li>
                    <a class="btn @if ($title == 'Lorem Ipsum Generator') btn-primary @else btn-default @endif"
                        href="/lipsum">
                    Lorem Ipsum Generator</a>
                </li>
                <li>
                    <a class="btn @if ($title == 'Users Generator') btn-primary @else btn-default @endif"
                        href="/users">
                    Users Generator</a>
                </li>
            </ul>
        </nav>

        <section>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>
    </div>

</body>
</html>
