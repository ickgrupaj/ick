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
                    <li><a href="index.php">Strona główna</a></li>
                    <li class="active"><a href="search.php">Loty</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Rejestracja</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="customize-col-content">
        <div>
            <span class="pull-left">
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">W jedną stronę</a></li>
                            <li><a href="#tab2" data-toggle="tab">W dwie strony</a></li>
                            <li><a href="#tab3" data-toggle="tab">Multi wyszukiwanie</a></li>
                        </ul>
            </span>
        </div>

        <div class="tab-content ">
            <div class="tab-pane active" id="tab1">
                <div class="customize-box-wrapper ">

                </div>
            </div>

            <div class="tab-pane" id="tab2">

                <div class="customize-box-wrapper">
                    <h4>Odrzucone</h4>

                </div>
            </div>

            <div class="tab-pane" id="tab3">

                <div class="customize-box-wrapper">
                    <h4>3</h4>

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
        color: #918D99;
    }

    .panel-tabs > li > a:hover {
        border-color: transparent;
        color: #9898a3;

    }

    .panel-tabs > li.active > a,
    .panel-tabs > li.active > a:hover,
    .panel-tabs > li.active > a:focus {
        color: #aaafb4;
        cursor: default;
        font-weight: bold;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        background-color: rgba(255, 255, 255, .23);
        border-bottom-color: transparent;
    }
</style>