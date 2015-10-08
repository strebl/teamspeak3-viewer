<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teamspeak Viewer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    {{--<link href="/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Loading Font Awesome -->
    {{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">--}}

    <!-- Loading Flags -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    {{--<link href="/css/flat-ui-pro.min.css" rel="stylesheet">--}}

    <!-- Loading App css -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}

    <!-- Loading Sweet Alert -->
    {{--<link rel="stylesheet" type="text/css" href="/css/sweet-alert.css">--}}

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#03a0e3">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#03a0e3">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->
    <script src="/js/cache-svg.js"></script>
</head>
<body>

    @yield('content')

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    {{--<script src="/js/jquery.min.js"></script>--}}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{--<script src="/js/flat-ui-pro.min.js"></script>--}}
    {{--<script src="/js/sweet-alert.min.js"></script>--}}
    @yield('javascript')

</body>
</html>
