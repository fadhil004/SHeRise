<!doctype html>
<html lang="en">
    <head>
    @include('layout.partials.head')
    </head>
    
    <body id="top">

        <main>
        @include('layout.partials.header')
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif           

        @yield('content')
        </main>

        <footer class="site-footer section-padding">
        @include('layout.partials.footer')
        </footer>


        @include('layout.partials.foot')
    </body>
</html>
