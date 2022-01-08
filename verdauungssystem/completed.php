<!DOCTYPE html>
    <?php
        if (isset($_COOKIE['usersnmid'])){
            //
        }else{
            header('Location: ./home');
        }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./img/favicons/site.webmanifest">
    <link rel="mask-icon" href="./img/favicons/safari-pinned-tab.svg" color="#181818">
    <link rel="shortcut icon" href="./img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#181818">
    <meta name="description" content="Das Verdauungssystem">
    <meta name="description" content="Verdauungssystem Spiel">
    <meta name="msapplication-config" content="./img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#181818">
    <title><?php if(isset($_POST['submit'])){ echo "Bereit, ", htmlspecialchars($_POST['usersnmid']), "?";} else{echo "Das Verdauungssystem";} ?></title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/play.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/footer.stick.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <noscript>
        <style>
            .main-cong{
                color: red !important; /* test style _ placeholder */
            }
        </style>
    </noscript>
</head>
<section>
    <div class="main-cong">
            <div class="header">
                <header>Geschafft, <?php print $_COOKIE["usersnmid"]; ?></header>
                <p>Du hast beim 1. Spiel <?php print $_COOKIE["_g1score"]; ?>/24 Körperteilen richtig benannt! <br/> Du hast beim 2. Spiel <?php print $_COOKIE["_g1score"]; ?>/"null" Fragen richtig beantwortet!</p>
                <?php 
                    if((isset($_COOKIE['_g1score']) && $_COOKIE['_g1score'] >= 20){
                        echo "Sehr gut, ", $_COOKIE["usersnmid"], "hier kannst du deine Urkunde runterladen:";
                    }else if((isset($_COOKIE['_g1score']) && $_COOKIE['_g1score'] < 20){
                        echo $_COOKIE["usersnmid"], "hier kannst du deine Urkunde runterladen:";
                    }
                ?>
                <button class="btnsubm">Herunterladen</button>
            </div>
    </div>
</section>
<footer>
            <div class="upper">
                <a style="padding-right:10px;" href="./quelle">Quelle</a>
                <a href="./cookies">Cookies</a>
            </div>
            <div class="lower">
                <p>Das Verdauungssystem von Luis, Erik, Paul</p>
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
    </div>
    <script src="./script/cookies.js"></script>
</body>
</html>
