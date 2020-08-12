<head>
    {{-- <script src="{{ asset('js/redir.js') }}"></script>
    <script type="text/javascript">
        navigator.__defineGetter__('userAgent', function () { return 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)'; });
    </script> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="{{setting('blog_meta_keywords')}}">
    <meta Content="{{setting('blog_meta_description')}}" Name="Description"/>
    <title>@yield('title', setting('blog_meta_title'))</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugin/bootstrap-datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugin/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    @yield('css')
</head>
