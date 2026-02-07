{{-- yield --}}
{{-- extend --}}
{{-- section --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','master')</title>
</head>
<body>
    <header>
            <h1>hello home page</h1>
            <a href="{{ route('parent.get') }}">Home</a> 
            <a href="{{ url('/child') }}">About</a>
    </header>
    <main>
        @yield('contect')
    </main>
    <footer>
        <h3>Footer master template</h3>
    </footer>
</body>
</html>
