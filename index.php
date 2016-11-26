<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Rozwiń nawigację</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">"Marka - Logo strony"</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Strona główna</a></li>
                    <li><a href="search.php">Loty</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Rejestracja</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="customize-col-content">
        <div class="row">
            <div class="col-md-8 text-center"><h2>Airplane tickets online </h2> <h4>Rezerwacja biletów jeszcze nigdy nie
                    była prostsza!</h4></div>
            <div class="col-md-4">
                <img style="width: 50%;"
                     src="http://www.airbus.com/fileadmin/_migrated/media/A300-600.png"/>
            </div>
        </div>
        <div class="row text-center " style="margin: 20px 0px">
            <div class="col-md-4">
                <div
                    style="border-radius: 3px ; padding-top: 30px; padding-bottom: 30px; background: #4b4a4e; border: none; color: #fff">
                    <h3>Lot</h3>
                    <h5>Wrocław-Warszawa</h5>
                    <h4>99zł</h4>
                    <button class="btn btn-primary" href="">SPRAWDŹ</button>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    style="border-radius: 3px ; padding-top: 30px; padding-bottom: 30px; background: #4b4a4e; border: none; color: #fff">
                    <h3>Lot</h3>
                    <h5>Wrocław-Warszawa</h5>
                    <h4>99zł</h4>
                    <button class="btn btn-primary" href="">SPRAWDŹ</button>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    style="border-radius: 3px ; padding-top: 30px; padding-bottom: 30px; background: #4b4a4e; border: none; color: #fff">
                    <h3>Lot</h3>
                    <h5>Wrocław-Warszawa</h5>
                    <h4>99zł</h4>
                    <button class="btn btn-primary" href="">SPRAWDŹ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>