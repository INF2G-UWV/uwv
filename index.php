<!DOCTYPE html>
<?php
    $user = 'root';
    $conn = new PDO('mysql:host=localhost;dbname=uwv', $user, '');
?>
<html>
<head lang="en">
    <!-- GENERAL -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>UWV Template</title>
    <meta name="description" content="UWV, Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Change order</a></li>
                    <li><a href="#">Add Question</a></li>
                    <li><a href="#">Change Question</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="row text-center center-tablecell">
            <div id="container">
                <table class="table table-striped">
                    <tr>
                        <th>FirstName</th>
                        <th>Surname</th>
                        <th>Points</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- JS FILES -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>