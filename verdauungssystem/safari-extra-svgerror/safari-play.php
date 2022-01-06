<!DOCTYPE html>
<html lang="en">
    <?php
        if (isset($_COOKIE['usersnmid'])){
            //
        }else{
            header('Location: ./home');
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./img/favicons/site.webmanifest">
    <link rel="mask-icon" href="./img/favicons/safari-pinned-tab.svg" color="#181818">
    <link rel="shortcut icon" href="./img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#181818">
    <meta name="msapplication-config" content="./img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#181818">
    <title style="text-transform: capitalize;">Spiel 1, <?php print $_COOKIE["usersnmid"]; ?></title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/play.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/popup.css">
    <link rel="stylesheet" href="./css/switch.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
</head>
<body>
    <?php 
        if (isset($_COOKIE["usernmid"])) {
            $val3752060 = $_COOKIE["usersnmid"];
        }          
    ?>
    <div class="mod-popup">
            <div class="innermodal <?php if (isset($_COOKIE["_gaclsmem"])) { echo "";} else{ echo "modopen";}?>">
                <header>Info</header>
                <div class="text">
                    <p class="modaltext">Willkommen zum 1. Spiel! <br> Benenne alle Körperteile richtig, achte auch auf <span class="mdgrokl">Groß- und Kleinschreibung</span> und die <span class="mdgrokl">korrekte Schreibweise</span>! <br> Zum vergrößern den Schalter umlegen. </p>
                    <center><button id="accepted" style="margin-top:30px;background:#181818 !important;" class="btnsubm">Schließen</button></center>
                </div>
            </div>
        </div>
        <div class="overlay <?php if (isset($_COOKIE["_gaclsmem"])) { echo ""; } else{ echo "modopen";}?>"></div>
        <a class="homeicon"><i id="openmodaa" class="fas fa-info-circle homeicon"></i></a>
        <label class="switch">
            <input type="checkbox" id="chckbx">
            <span class="slider round sldrnfdff"></span>
        </label>
    <section class="main-game">
        <div class="main-inner-game-comtainer"></div>
            <object data="./safari-extra-svgerror/svg-game-1.safari.svg" type="image/svg+xml">
                <!-- /--SVG REPLACE--/ -->
            </object>
            <center><button id="checkansw" class="btnsubm ishfb">Prüfen</button></center>
            <center><button id="checkgoon" style="display:none;" class="btnsubm ishfb">Weiter</button></center>
        </div>
        <div class="greet1" id="grt1">
            <h1 style="padding-bottom: 1.6px;text-transform:capitalize;margin-top:50px;">Glückwunsch, <?php print $_COOKIE["usersnmid"]; ?>!</h1>
            <p>Du hast <span style="color: #5ac77b;">alle</span> Fragen richtig beantwortet.</p>
            <center><button style="margin-top: 12.6px;margin-bottom:22px;" class="btnsubm" id="bntweiter"><a class="aref" href="./spiel2">Weiter</a></button></center>
        </div>
        <div class="greet2" id="grt2">
            <h1 style="padding-bottom: 1.6px;text-transform:capitalize;margin-top:50px;">Schade, <?php print $_COOKIE["usersnmid"];?>!</h1>
            <p style="padding-bottom: 1.6px;">Du hast leider <span style="color:red;">nicht alle</span> Fragen richtig beantwortet.</p>
            <p>Du kannst es nochmal versuchen oder zum nächsten Spiel gehen.</p>
            <div style="display:flex;align-items:center;justify-content:center;margin-bottom:22px;">
                <button style="margin-top: 12.6px;margin-right:10px;" class="btnsubm" type="reset" id="neu"><a class="aref" href="./spiel">Nochmal</a></button>
                <button style="margin-top: 12.6px;" class="btnsubm" type="reset" id="bntweiter"><a class="aref" href="./spiel2">Weiter</a></button>
            </div>
        </div>
        <footer>
            <div class="upper">
                <a style="padding-right:10px;" href="./quelle">Quelle</a>
                <a href="./cookies">Cookies</a>
            </div>
            <div class="lower">
                <p>Das Verdauungssystem von Luis, Erik, Caspar, Paul</p>
            </div>
        </footer>
        <div class="wrapper">
            <div class="content">
                <header>Cookies</header>
                <p>Wir verwenden Cookies um das Spielerlebnis zu verbessern.</p>
                <div class="buttons">
                    <button class="item">Verstanden</button>
                    <a href="./cookies" class="item">Mehr erfahren</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#neu').click(function reload(){
            window.location.href= './spiel'; 
        });
        $('#bntweiter').click(function redir(){
            window.location.href= './spiel2'; 
        });
        
        $("#openmodaa").click(function openmodldk() {
            $(".overlay").addClass("modopen");
            $(".innermodal").addClass("modopen")
        });
    </script>
    <script>
        $("#chckbx").change(function() {
            if(this.checked) {
                $('#svg29157').css("height", "100%");
            }
            else{
                $('#svg29157').css("height", "229.19267mm");
            }
        });
    </script>
    <script> 
        $('#accepted').click(function clspop() {
            $(".overlay").removeClass("modopen");
            $(".innermodal").removeClass("modopen")
            document.cookie = "_gaclsmem=GA1.2.442452332.163416588; max-age="+60*60*24*30;
        });
        $('.overlay').click(function clspop2() {
            $(this).removeClass("modopen");
            $(".innermodal").removeClass("modopen")
        });
    </script>
    <script>
        
    </script>
    <script src="./script/game_main.js"></script>
    <script src="./script/cookies.js"></script>
</body>
</html>