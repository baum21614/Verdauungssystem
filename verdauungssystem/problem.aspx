<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achtung, Fehler!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            body{
                user-select: none;
                -webkit-user-select: none;    
                -moz-user-select: none;
                -ms-user-select: none;
            }
            img{
                pointer-events: none;
            }
            .img{
                pointer-events: none;
            }
            mainsect{
                user-select: none;
                -webkit-user-select: none;    
                -moz-user-select: none;
                -ms-user-select: none;
            }
            small{
                user-select: none;
                -webkit-user-select: none;    
                -moz-user-select: none;
                -ms-user-select: none;
            }
            p{
                user-select: none;
                -webkit-user-select: none;    
                -moz-user-select: none;
                -ms-user-select: none;
            }
            button{
                user-select: all;
                -webkit-user-select: all;    
                -moz-user-select: all;
                -ms-user-select: all;
                pointer-events: all;
            }
            .over{
                background-color: rgba(0, 0, 0, 0.7);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
            }
            .crss{
                box-shadow:2px 2px 4px 0 black;
                cursor: pointer;
            }
            .crss:after{
                content:'\d7';
            }
            #pop{
                display: none!important;
            }
            .over{
                display: none!important;
            }
            #pop.open{
                display: initial !important;
            }
            .over.open{
                display: block!important;
            }
            body > .popup{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .qq{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .etxtcp{
                display: none;
            }
            .etxtcp.open{
                display: initial;
            }
        </style>
</head>
<body>
    <section>
        <mainsect>
            <h1>Achtung, Fehler!</h1>
            <div class="img" style="pointer-events:none">
                <img style="height:80px;" src="https://i.stack.imgur.com/1oXSA.png" alt="safari">
                <img style="height:80px;" src="https://iconarchive.com/download/i60228/zerode/plump/Internet-Explorer.ico" alt="iexplorer">
            </div>
            <div class="text">
                <p>Sie scheinen einen nicht Unterstützen Browser zu verwenden!</p>
                <span>Folgende Browser werden nicht ünterstützt:</span>
                <div style="display:flex;margin-top:6px;">
                    <small style="color:red;font-size:16px;">Safari </small> |
                    <small style="color:red;font-size:16px;">Internet Explorer </small> |
                    <pre>"null" problem.aspx:5; problem.aspx:6; problem.aspx:7</pre>
                </div>
            </div>
            <div class="beschw">
                <button id="agronbt">Beschwerden</button>
            </div>
            <div class="over"></div>
            <div class="qq"><div class="popup" id="pop" style="background-color: antiquewhite;width:370px;padding: 25px;position: fixed;display: grid;place-content: center;">
                <div class="h" style="display: flex;justify-content: space-between;">
                    <header>BESCHWERDE</header><button class="crss" title="Close"></button>
                </div>
                <div class="form">
                    <form action="" method="" style="display: flex;flex-direction: column;width: 370px;">
                        <input type="email" name="" placeholder="Email..." id="" required>
                        <!--input type="text" name="" id="" placeholder="Privat ODER für eine Organisation, Firma, Regierung?"  required-->
                        <select style="resize: none;margin-top:10px;" name="ferma" id="ferma" required>
                            <option value="">---Privat oder für eine Organisation, Firma, Regierung?---</option>
                            <option value="priv">Privat</option>
                            <option value="org">Organisation, Firma, Regierung</option>
                        </select>
                        <input type="text" class="etxtcp" style="resize: none;margin-top:10px;" placeholder="Ihre Organisation, Firma">
                        <textarea name="" id="" placeholder="Beschwerde..." required style="resize: none;margin-top:10px; height: 90px;"></textarea>
                        <div style="display:flex;width:370px;"><input type="checkbox" name="agre" id="agre" required> <label for="agre">Ich drücke mich in der beschwerde formal aus und beleidige damit niemanden.</label></div>
                        <button type="submit">Abschicken</button>
                    </form>
                </div>
            </div></div>
        </mainsect>
    </section>
    <script>
        let pop = document.getElementById("pop"),
        button = document.getElementById("agronbt");

        $("#agronbt").click(function(){
            $('#pop').addClass('open');
            $('.over').addClass('open');
        })
        $(".crss").click(function(){
            $('#pop').removeClass('open');
            $('.over').removeClass('open');
        })
        $("#ferma").on('change', function() {
            if ($(this).val() == 'org'){
                $('.etxtcp').addClass('open');
            }else{
                $('.etxtcp').removeClass('open');
            }
        });
    </script>
</body>
</html>