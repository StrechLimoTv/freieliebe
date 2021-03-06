<?php
/*
Author: Justin Dreisow aka Aeon Eros
Creation Date: 17. Februar 2018
Website: freieliebe.one
*/

include("auth.php"); //include auth.php file on all secure pages 
?>


<!DOCTYPE html>
<html lang="de">
    
    <head>
      <title>Freie Liebe Dashboard</title>
      <link rel="icon" type="img/ico" href="img/favicon.ico">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <img class="navbar-brand" src="img/favicon.ico" href="index.php">
        </div>
          
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="regeln.php">Regeln </a></li>
            <li><a href="dashboard.php">News</a></li>
            <li><a href="mitglieder.php">Mitglieder</a></li>
            <li><a href="dashboard.php">Gangkonto</a></li>
            <li><a href="dashboard.php">Verbündeten/Feindliste</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Ausloggen</a></li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Regeln PAGE CONTENT -->
        
   <div class="wrapper">
  <div class="container">

    <div id="narrow-browser-alert" class="alert alert-info text-center">
      <strong>ACHTUNG!</strong> <br>NUR ZUM TEST</div>
    
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
      <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
        <li role="presentation" class="active">
          <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
            <span class="text">Allgemeine Regeln</span>
          </a>
        </li>
        <li role="presentation" class="next">
          <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
            <span class="text">Überfallen</span>
          </a>
        </li>
        <li role="presentation" class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
            <span class="text">Farmen</span>
            <span class="caret">
            </span>
          </a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
            <li>
              <a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                <span>@fat</span>
              </a>
            </li>
            <li>
              <a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">
                <span>@mdo</span>
              </a>
            </li>
          </ul>
        </li>
        <li role="presentation">
          <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
            <span class="text">Metamorfoz by Franz Kafka</span>
          </a>
        </li>

      </ul>
        
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
              
          <p>
        <a class="regelntags">§1</a> &nbsp; Ihr sollt euch untereinander mit Respekt begegnen und Meinungen von anderen akzeptieren...
        Das gleiche gilt gegenüber fremden Clans :)
          </p><br>
          <p>
        <a class="regelntags">§2</a> &nbsp; Wenn ihr Online seit, besteht TeamSpeak³ pflicht.
        (sollte es nicht möglich sein ins TS3 zu joinen, meldet euch via Panel oder Ingame)
          </p><br>
          <p>
            &emsp; <a class="regelntags">§2.1</a>  &nbsp;  Die korrekte Nutzung der Funkrichtlinien ist dabei zu beachten.
          </p><br>
          <p>
            <a class="regelntags">§3</a> &nbsp;  Konflikte zwischen Mitgliedern sollten eigenständig gelöst werden! 
        (Ist dies nicht möglich, wendet euch an die Rechte Hand oder an ein Chef / Vorstand.)
          </p><br>
          <p>
            <a class="regelntags">§4</a> &nbsp; Für längere Abwesenheit bitte die Vorstände/Rechte Hand informieren, damit wir uns auf die Abwesenheit einstellen können.
          </p><br>
          <p>
            <a class="regelntags">§5</a> &nbsp;  Bei RDM/VDM oder sonstigen Regelverstössen gegen euch, wird die Gegenpartei nicht via Sidechat in den Diplomatiebereich gebeten. Hierbei wird ausschliesslich Ts³ oder die &emsp;&emsp;Sms-Funktion benutzt. (Diese Regel dient dazu um nicht als Kiddie-Clan zu erscheinen.)
          </p><br>
          <p>
            <a class="regelntags">§6</a> &nbsp;  Es wird sich an die vom Server festgelegten Regeln gehalten.
          </p><br>
          <p>
            <a class="regelntags">§7</a> &nbsp;   Bei mehrfachen RP-Brüchen werden Weed-Cookies ausgesprochen :c RP steht an 1. Stelle!
          </p>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
          <p>
            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo
            enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio
            cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
          </p>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
          <p>
            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
            hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard
            of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
          </p>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
          <p>
            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred
            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
            vegan.
          </p>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="samsa" aria-labelledby="samsa-tab">
          <p>
            One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
          </p>
          <p>
            He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.
          </p>
          <p>
            The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?
          </p>
          <p>
            " he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
          </p>
          <p>
            A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.
          </p>
          <p>
            It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.
          </p>
          <p>
            Drops of rain could be heard hitting the pane, which made him feel quite sad.
          </p>
          <p>
            "How about if I sleep a little bit longer and forget all this nonsense", he thought, but that was something he was unable to do because he was used to sleeping on his right, and in his present state couldn't get into that position. However hard he threw
            himself onto his right, he always rolled back to where he was.
          </p>
          <p>
            He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before. "Oh, God", he thought, "what a strenuous career
            it is that I've chosen!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

        
        
        
        
    <div class="footer navbar-fixed-bottom">
        <div class="container">
            <p class="text-left pull-left" ><a class="EinloggenText2" href="ts3server://79.133.51.98/?nickname=Dashboard Gast" target="_blank">Verbinde mit Teamspeak</a></p>
            <p class="text-right pull-right"><a class="EinloggenText2" target="_blank">Created by Justin Dreisow</a></p>
        </div>
    </div>
        
    </body>
</html>
