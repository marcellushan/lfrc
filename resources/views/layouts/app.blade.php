<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Resource Center</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css">
    <!--       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->

    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootswatch.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/frc.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/ajaxlivesearch.css">
    <script src="{{URL::to('/')}}/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.16.0/dev/polyfiller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script>
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
    <script src="{{URL::to('/')}}/js/ajaxlivesearch.js"></script>
    <script src="{{URL::to('/')}}/js/js_functions.js"></script>
    {{--<script src="{{URL::to('/')}}/jquery/jquery_validation.js"></script>--}}

</head>

<body>
<div class="container">
    <div class="jumbotron">

        <h1><a href="{{URL::to('/')}}">Family Resource Center</a></h1>
        <p>Family Tracking Database</p>
    </div>
@yield('content')
</body>
</html>





