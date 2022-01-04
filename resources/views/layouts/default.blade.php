<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container mx-auto">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="container">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
