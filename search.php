<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loty</title>

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
                    <li><a href="index.php">Strona główna</a></li>
                    <li class="active"><a href="search.php">Loty</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="#">Rejestracja</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="customize-col-content" style="min-height: 270px;">
        <h4 class="text-center">Wyszukiwanie połączeń</h4>

        <div>
            <span class="pull-left">
                        <ul class="nav panel-tabs">
                            <li style="background: #4e4b53" class="active"><a href="#tab1" data-toggle="tab">W jedną
                                    stronę</a></li>
                            <li style="background: #4e4b53"><a href="#tab2" data-toggle="tab">W dwie strony</a></li>
                            <li style="background: #4e4b53"><a href="#tab3" data-toggle="tab">Multi wyszukiwanie</a>
                            </li>
                        </ul>
            </span>
        </div>

        <div class="tab-content" style="clear: both; ">
            <div class="tab-pane active customize-box-wrapper" id="tab1">
                <div class="customize-box-wrapper ">
                    <form class="form-horizontal" role="form">
                        <div class="form-group text-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Bez przesiadek
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Z</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input1"
                                           placeholder="Wprowadź lotnisko początkowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-3 control-label">Termin wylotu</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="input2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select1" class="col-sm-3 control-label">Klasa</label>

                                <div class="col-sm-9">
                                    <select class="form-control" id="select1">
                                        <option>Ekonomiczna</option>
                                        <option>Biznesowa</option>
                                        <option>Pierwsza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Do</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input4"
                                           placeholder="Wprowadź lotnisko docelowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Dorośli</label>

                                <div class="col-sm-3">
                                    <input type="number" value="1" class="form-control" id="input4">
                                </div>
                                <label for="input4" class="col-sm-3 control-label">Liczba dzieci</label>

                                <div class="col-sm-3">
                                    <input type="number" value="0" class="form-control" id="input4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-sm-offset-2 col-sm-8">
                                <a href="result.php" type="submit" class="btn btn-primary">Szukaj połączeń</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane customize-box-wrapper" id="tab2">
                <div class="customize-box-wrapper">
                    <form class="form-horizontal" role="form">
                        <div class="form-group text-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Bez przesiadek
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Z</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input1"
                                           placeholder="Wprowadź lotnisko początkowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-3 control-label">Termin wylotu</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="input2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select1" class="col-sm-3 control-label">Klasa</label>

                                <div class="col-sm-9">
                                    <select class="form-control" id="select1">
                                        <option>Ekonomiczna</option>
                                        <option>Biznesowa</option>
                                        <option>Pierwsza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Do</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input4"
                                           placeholder="Wprowadź lotnisko docelowe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input2" class="col-sm-3 control-label">Termin powrotu</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="input2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Dorośli</label>

                                <div class="col-sm-3">
                                    <input type="number" value="1" class="form-control" id="input4">
                                </div>
                                <label for="input4" class="col-sm-3 control-label">Liczba dzieci</label>

                                <div class="col-sm-3">
                                    <input type="number" value="0" class="form-control" id="input4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-primary">Szukaj połączeń</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="tab-pane customize-box-wrapper" id="tab3">
                <form class="form-horizontal" role="form">

                    <div class="customize-box-wrapper ">
                        <div class="form-group text-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Bez przesiadek
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Z</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input1"
                                           placeholder="Wprowadź lotnisko początkowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-3 control-label">Termin wylotu</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="input2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select1" class="col-sm-3 control-label">Klasa</label>

                                <div class="col-sm-9">
                                    <select class="form-control" id="select1">
                                        <option>Ekonomiczna</option>
                                        <option>Biznesowa</option>
                                        <option>Pierwsza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Do</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input4"
                                           placeholder="Wprowadź lotnisko docelowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Dorośli</label>

                                <div class="col-sm-3">
                                    <input type="number" value="1" class="form-control" id="input4">
                                </div>
                                <label for="input4" class="col-sm-3 control-label">Liczba dzieci</label>

                                <div class="col-sm-3">
                                    <input type="number" value="0" class="form-control" id="input4">
                                </div>
                            </div>
                        </div>
                        <div class="text-right" style="font-size: 20px">
                            <a class="alert-link" href="">X</a>
                        </div>
                    </div>
                    <div style="clear: both; border-top: 1px solid #525252"></div>
                    <div class="customize-box-wrapper ">
                        <div class="form-group text-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Bez przesiadek
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input1" class="col-sm-3 control-label">Z</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input1"
                                           placeholder="Wprowadź lotnisko początkowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-3 control-label">Termin wylotu</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="input2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select1" class="col-sm-3 control-label">Klasa</label>

                                <div class="col-sm-9">
                                    <select class="form-control" id="select1">
                                        <option>Ekonomiczna</option>
                                        <option>Biznesowa</option>
                                        <option>Pierwsza</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Do</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="input4"
                                           placeholder="Wprowadź lotnisko docelowe">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-3 control-label">Dorośli</label>

                                <div class="col-sm-3">
                                    <input type="number" value="1" class="form-control" id="input4">
                                </div>
                                <label for="input4" class="col-sm-3 control-label">Liczba dzieci</label>

                                <div class="col-sm-3">
                                    <input type="number" value="0" class="form-control" id="input4">
                                </div>
                            </div>
                        </div>
                        <div class="text-right" style="font-size: 20px">
                            <a class="alert-link" href="">X</a>
                        </div>
                    </div>
                    <div style="clear: both; border-top: 1px solid #525252"></div>
                    <div class="text-right" style="margin: 10px 0px">
                        <button class="btn btn-primary">Dodaj kolejne</button>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-primary">Szukaj połączeń</button>
                        </div>
                    </div>
                </form>
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
    /*Panel tabs*/
    .panel-tabs {
        position: relative;
        bottom: 0px;
        clear: both;
        border-bottom: 1px solid transparent;
    }

    .panel-tabs > li {
        float: left;
        margin-right: 2px;
        margin-top: 4px;
        line-height: .85;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
        color: #918D99;
        background: #edf4f4;
    }

    .panel-tabs > li > a {
        line-height: .85;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
        color: #f4ebff;
    }

    .panel-tabs > li > a:hover {
        border-color: transparent;
        color: #9898a3;

    }

    .panel-tabs > li.active > a,
    .panel-tabs > li.active > a:hover,
    .panel-tabs > li.active > a:focus {
        color: #f2f9ff;
        cursor: default;
        font-weight: bold;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        background-color: rgba(255, 255, 255, .23);
        border-bottom-color: transparent;
    }
</style>