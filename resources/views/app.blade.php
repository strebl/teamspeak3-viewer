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

    {{--<link rel="shortcut icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />--}}
    {{--<link rel="shortcut icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />--}}


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
