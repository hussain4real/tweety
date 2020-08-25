<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 ml-6 mb-6">

            <header class="container mx-auto">
                <h1>
                    <img src="/images/logo.svg" alt="Tweety">
                </h1>
            </header>
        </section>

        <section class="px-8">

            <main class="container mx-auto">
                <div class="lg:grid grid-cols-12 gap-4 ">

                    <div class="lg:col-start-2 col-end-4 ">

                        @include('_sidebar-links')

                    </div>

                    <div class=" lg:col-start-4 col-end-10 lg:mr-6" style="max-width: 700px">

                        @yield('content')

                    </div>

                    <div class="lg:col-start-10 col-end-12 ">

                        @include('_friends-list')

                    </div>

                </div>
            </main>
        </section>
    </div>
</body>

</html>
