<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt</title>

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
                    <li><a href="search.php">Loty</a></li>
                    <li class="active"><a href="#">Kontakt</a></li>
                    <li><a href="#">Rejestracja</a></li>
                    <li><a href="#">Logowanie</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="customize-col-content">

        <center><h1>Kontakt</h1></center>
        <center>
        <table id="contactTable" style="width:80%; height:300px">
              <tr>
                <td style="width:40%;"> <h4>W razie problemów skontaktuj się z nami:</h4> <br>
             
                    Biuro Obsługi Klienta (Wrocław)<br>
                    ul. Lotnicza 15a/3<br>
                    tel. +48 77 823 19 42<br>
                    E-mail: <a href="mailto:bokwroclaw@airplanetickets.pl" target="_top">bokwroclaw@airplanetickets.pl</a>
                    <br>
                     <br><br>
                    Biuro Obsługi Klienta (Warszawa)<br>
                    ul. Wiślana 15a/3<br>
                    tel. +48 22 843 16 42<br>
                    E-mail: <a href="mailto:bokwarszawa@airplanetickets.pl" target="_top">bokwarszawa@airplanetickets.pl</a>
                    <br>
                    </td>
                    
            


            <td style="width:60%;">
            <center>
                <div id="map" style="width:450px; height:300px; margin-top: 10%"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 51.1279469, lng: 16.9748495};
                    var map = new google.maps.Map(document.getElementById("map"), {
                      zoom: 15,
                      center: uluru
                    });
                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
                    });
                  }
                </script>
                <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-I6lFHeHpacF3UeoCqDFn9gOOFiyvXI&callback=initMap">
                </script>
                </center>

            </td>

             </tr>

            </table>
            </center>
</div>

<div class="customize-col-content" style="height: 300px">
<center>
    <h3> Napisz do nas! </h3>

    <table id="messageTable" style="width:80%; height:40%" border="3">
      <tr>
        <td style="width:30%; ">
         <input id="contactEmailInput" type="text" style="margin-left: 10%; width:80%" id="contactEmailInput"  placeholder="me@example.com">
         <br>
         <br>
         <br>
         <button class="btn btn-primary" id="contactSendButton" style="margin-left: 70%" > Wyślij</button>
        </td>
        <td style="width:70%;">

        <textarea id="concactMailDescriptionInput" style="margin-left: 5%; margin-right: 5%; margin-top: 3%; margin-bottom: 5%; width:90%; resize:none; " name="kontakttresc" cols="95" rows="4" placeholder="Tutaj wpisz treść wiadomości..."></textarea>
        </td>
     </tr>

    </table>
</center>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>