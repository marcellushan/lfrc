<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment Reporting</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css">
    <!--       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->

    <link rel="stylesheet" href="http://<?=$_SERVER["HTTP_HOST"] ?>/frc/css/bootswatch.css">
    <link rel="stylesheet" href="http://<?=$_SERVER["HTTP_HOST"] ?>/frc/css/frc.css">

</head>

<body>
<div class="container">
    <div class="jumbotron">

        <h1>Family Resource Center</h1>
        <p>Family Tracking Database</p>
    </div>
@yield('content')
</body>
</html>





