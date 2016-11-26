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
        <h4 class="text-center">Wyniki wyszukiwania</h4>

        <div class="row" style="margin: 0 30px !important;">
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 60px; background: #3c3c3c; color: #fff">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-4"><strong>Z:</strong> Wrocław</div>
                            <div class="col-md-4"><strong>Do:</strong> Warszawa</div>
                            <div class="col-md-4"><strong>Termin:</strong>10.02.2016</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Klasa:</strong> ekonomiczna</div>
                            <div class="col-md-4"><strong>Liczba osób:</strong> 4</div>
                            <div class="col-md-4">bezpośrednio</div>
                        </div>
                    </div>

                    <a href="search.php" class="btn btn-primary">Zmień zapytanie</a>

                </div>
                <table class="table table-fixed">
                    <thead >
                    <tr >
                        <th class="col-xs-2">Skąd</th>
                        <th class="col-xs-1">Start</th>
                        <th class="col-xs-2">Dokąd</th>
                        <th class="col-xs-1">Koniec</th>
                        <th class="col-xs-2">Przewoźnik</th>
                        <th class="col-xs-2">Cena</th>
                        <th class="col-xs-1"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xs-2">Wrocław (Starachowice)</td>
                        <td class="col-xs-1">6:30</td>
                        <td class="col-xs-2">Warszawa (Chopin)</td>
                        <td class="col-xs-1">7:30</td>
                        <td class="col-xs-2">LOT</td>
                        <td class="col-xs-1">99 zł</td>
                        <td class="col-xs-1"><a href="" class="btn btn-primary">Zamów</a></td>
                    </tr>
                    <tr>
                        <td class="col-xs-2">Wrocław (Starachowice)</td>
                        <td class="col-xs-1">6:30</td>
                        <td class="col-xs-2">Warszawa (Chopin)</td>
                        <td class="col-xs-1">7:30</td>
                        <td class="col-xs-2">LOT</td>
                        <td class="col-xs-1">99 zł</td>
                        <td class="col-xs-1"><a href="" class="btn btn-primary">Zamów</a></td>
                    </tr>
                    <tr>
                        <td class="col-xs-2">Wrocław (Starachowice)</td>
                        <td class="col-xs-1">6:30</td>
                        <td class="col-xs-2">Warszawa (Chopin)</td>
                        <td class="col-xs-1">7:30</td>
                        <td class="col-xs-2">LOT</td>
                        <td class="col-xs-1">99 zł</td>
                        <td class="col-xs-1"><a href="" class="btn btn-primary">Zamów</a></td>
                    </tr>
                    </tbody>
                </table>
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

<style>

/**/
    /*.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {*/
        /*display: block;*/
    /*}*/

    /*.table-fixed tbody td, .table-fixed thead > tr > th {*/
        /*float: left;*/
        /*border-bottom-width: 0;*/
    /*}*/
</style>