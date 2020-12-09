<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="wrapper">
       <section class="angli-care-header">
            @include('layouts/partials/_header')    
       </section>
       <section class="angli-care-content mb-15">
            <div id ="page-content" class="anglicare-content">
                @yield('content')
            </div>
        </section>
        <section class="angli-care-footer">
            @include('layouts/partials/_footer')
        </section>
    </div>
    <script type="text/javascript">
            $(document).ready(function() {
                $("#back2Top").click(function(event) {
                    event.preventDefault();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                });

            });
            $(window).scroll(function() {
                var height = $(window).scrollTop();
                if (height > 100) {
                    $('#back2Top').fadeIn();
                } else {
                    $('#back2Top').fadeOut();
                }
            });
            $('.carousel').carousel({
                interval: 2000
            });  
    </script>
</body>
</html>
