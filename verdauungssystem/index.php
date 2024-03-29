<!DOCTYPE html>
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
    <title><?php if(isset($_COOKIE['usersnmid'])){ echo "Bereit, ", $_COOKIE['usersnmid'],"?";} else{echo "Das Verdauungssystem";} ?></title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/play.css">
    <link rel="stylesheet" href="./css/cookies.css">
    <link rel="stylesheet" href="./css/footer.stick.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="overflow:hidden;">
    <?php
        foreach($_POST as $key =>$value) {
            setcookie($key, $value, time()+86400);
        }
    ?>
    <div class="mflex">    
        <div class="vis1st <?php if (isset($_COOKIE["usersnmid"])) { echo "clicked"; }?>" style="overflow-x:hidden;">    
            <section class="inf">
                <div class="infinner">
                    <h1>Willkommen zum Spiel <span style="color:#5ac77b;">"Das Verdauungssystem"</span></h1>
                    <p style="margin-top: 10px;font-size: 22px;">Um zu Spielen musst du zuerst deinen Namen eingeben.</p>
                </div>
            </section>
            <section class="namemain" id="swc45453">
                <div class="inner" style="display:flex;justify-content:center">
                    <form action="" method="post" style="position:relative;overflow:hidden;">
                        <input id="nameinp" name="usersnmid" class="tinp" type="text" placeholder="Dein Name..." value="<?= isset($_POST['usersnmid']) ? htmlspecialchars($_POST['usersnmid']) : '' ?>" <?php if(isset($_POST['submit'])) { echo 'style="opacity:.5;pointer-events:none!important;"';}?> maxlength="25"/>
                        <span class="char-limit">25</span>
                        <input name="submit" id="formbt" class="btnsubm" type="submit" value="Schicken" <?php if(isset($_POST['submit'])) { echo "style='opacity:.5;pointer-events:none!important;'";}?>>
                    </form>
                </div>
                <?php if(isset($_POST['submit'])) { echo "<center><button style='margin-top:25px;' id='btnsbm' class='btnsubm'>Weiter</button></center>";}?>
            </section>
        </div>
        <section class="next <?php if (isset($_COOKIE["usersnmid"])) { echo "clicked"; }?>">
            <div class="nxtinner">
                <h1 style="text-transform:capitalize;">Hallo, <?php if(isset($_COOKIE["usersnmid"])){ echo $_COOKIE['usersnmid'];} else{ echo htmlspecialchars($_POST['usersnmid']);}?></h1>
                <p style="margin-top:10px;font-size:22px;">Du bist bereit zum Spielen.</p>
                <button id="red" style="margin-top:10px;" href="./spiel" class="btnsubm"><a style="font-size:18.5px;color:#f0f8ff;text-decoration:none;" href="./spiel">Los</a></button>
            </div>
        </section>
        <footer>
            <div class="upper">
                <a style="padding-right:10px;" href="./quelle">Quelle</a>
                <a href="./cookies">Cookies</a>
            </div>
            <div class="lower">
                <p>Das Verdauungssystem von Luis, Erik,<!-- Caspar, (?/)--> Paul</p>
            </div>
        </footer>
        <div class="wrapper">
            <div class="content">
            <header>Cookies</header>
            <p>Wir verwenden nötige Cookies um das Spielerlebnis zu verbessern. Mit Benutzen der Website stimmen sie den Cookies zu.</p>
            <div class="buttons">
                <button class="item">Verstanden</button>
                <a href="./cookies" class="item">Mehr erfahren</a>
            </div>
        </div>
    </div>
    </div>
    <script>
        $('#red').click(function redredir(){
            location.replace('./spiel');
        });
        $('.leave').click(function(){
            location.replace('https://google.com');
        })
        // 
        $("#formbt").click(function() {
            $(this).css("opacity", "0.5");
            $(this).css("pointer-events", "none");
            $(".tinp").css("opacity", "0.5");
            $(".tinp").css("pointer-events", "none");
        })
    </script>
    <script>
        $('#btnsbm').click(function swipe(){
            $('.next').toggleClass('clicked');
            $('.vis1st').toggleClass('clicked');
            $('.formbt').toggleClass('clicked');
        });
    </script>
    <script>
        function checkForInput(element) {
            if ($('#nameinp').val().length <= 0){
                $('#formbt').addClass('opacityl');
            }else{
                $('#formbt').removeClass('opacityl');
            }     
        }
        $('#nameinp').each(function() {
            checkForInput(this);
        });
        $('#nameinp').on('change keyup', function() {
            checkForInput(this);  
        });
        // 
    </script>
    <script src="./script/char-lmta.js"></script>
    <script src="./script/cookies.js"></script>
</body>
</html>