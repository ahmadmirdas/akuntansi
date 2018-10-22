<!DOCTYPE html>
<html lang="en">
    @include('components.parts.head')
  <body class="projects">
    <div id="wrap">
        <header>@include('components.parts.header')</header>
        <nav class="main-menu">@include('components.parts.navs')</nav>
        <main>
            <div id="wrap">
                <div class="section">
                    <div class="content-wrap">
                        @yield('content')
                    </div>
                </div>
                <div class="mask"></div>
            </div>
        </main>
        <footer>
            <div class="content-wrap">Copyright &copy; 2018. Inspirasi Digital Eksperiensia, PT company.</div>
        </footer>
    </div>
    </body>
    <script src="{{ asset('plugins/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-4/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('scripts/main.js') }}"></script>
</html>