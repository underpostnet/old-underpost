<!DOCTYPE html>
<html lang='en'>

    <head>

        <!-- meta -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142681040-1"></script>

      	<script>

      	  window.dataLayer = window.dataLayer || [];

      	  function gtag(){dataLayer.push(arguments);}

      	  gtag('js', new Date());

      	  gtag('config', 'UA-142681040-1');

      	  gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.

      	</script>

        <meta http-equiv='Content-Type' content='text/html; charset=euc-jp'>

        <meta http-equiv='expires' content='0'>

        <meta http-equiv='Cache-Control' content='no-cache'>

        <meta http-equiv='Pragma' content='no-cache'>

        <meta name='description' content='Virtual Roll Dice - UNDERpost.net'>

        <meta name='keywords' content='Virtual Roll Dice - UNDERpost.net'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/dice/index.php'>

        <meta name='identifier-URL' content='https://www.underpost.net/dice/index.php'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Virtual Roll Dice - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/dice/index.php" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Virtual Roll Dice - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/dice/index.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='../assets/underpost.png' />

        <!-- <link rel='alternate' hreflang='es' href='URL'> -->

        <!--  android -->

        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

        <!--  ios -->

        <meta name='viewport' content='width=device-width, user-scalable=no' />

        <!--  css -->

        <link rel=StyleSheet href='index.css' type='text/css' media=all>

        <style>

        .cover {

            position: absolute;
            width: 100%;
            max-width: 800px;
            height: 103%;
            top: 0px;
            transform: translate(-50%, 0%);
            left: 50%;
            background: #111111;

        }

        .mas {

            transform: translate(-50%, 0);
            position: absolute;
            width: 70px;
            height: 70px;
            background: black;
            color: white;
            cursor: pointer;
            left: 30%;
            top: 15%;
            border-radius: 5px;

        }

        .menos {

            transform: translate(-50%, 0);
            position: absolute;
            width: 70px;
            height: 70px;
            background: black;
            color: white;
            cursor: pointer;
            left: 70%;
            top: 15%;
            border-radius: 5px;
        }

        .centro {

            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            font-size: 40px;
            font-weight: 700;
        }

        .resource {

            position: absolute;
            top: 90%;
            text-align: center;
            width: 100%;

        }

        .dice {

            position: absolute;
            width: 90%;
            transform: translate(-50%, 0);
            top: 30%;
            left: 50%;
            text-align: center;
        }

        .rollButton{

            position: absolute;
            transform: translate(-50%, 0);
            width: 80%;
            height: 10%;
            background: black;
            cursor: pointer;
            left: 50%;
            top: 70%;
            border-radius: 5px;

        }

        .total{

            position: absolute;
            width: 100%;
            top: 85%;
            text-align: center;

        }

        </style>

        <!--  jquery -->

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

        <!-- title -->

        <title>UNDERpost.net</title>

    </head>

    <body>

        <div class='description' style='display: none;'><h1>Virtual Roll Dice</h1></div>

        <div class='cover'>


            <div class='mas'>

                <div class='centro'>+</div>

            </div>


            <div class='menos'>

                <div class='centro'>-</div>

            </div>


            <div class='dice'>

            </div>


            <div class='rollButton'>

               <div class='centro'>

                   ROLL

               </div>

            </div>

            <div class='total'></div>

            <div class='resource'>

                <a href='../index.php'>

                   Powered By  <strong>UNDER</strong>post.net

                </a>

            </div>


        </div>

        <script>

            function reset(){

                token1=false;
                token2=false;
                token3=false;
                token4=false;
                token5=false;
                token6=false;
                token7=false;
                token8=false;
                token9=false;
                token10=false;

            }

            function random(min, max) {

                return Math.floor(Math.random() * (max - min + 1) ) + min;

            }

            var ra= new Array();

            function roll(){

                var ancho =100/cantidad;
                var suma=0;

                $('.dice').html('');

                for(var i=1; i<=cantidad; i++){

                    if(i==1 && token1){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==2 && token2){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==3 && token3){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==4 && token4){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==5 && token5){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==6 && token6){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==7 && token7){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==8 && token8){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==9 && token9){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else if(i==10 && token10){

                        var r= ra[i];
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer; filter: invert(100%);">');
                        suma=r+suma;

                    }else{

                        var r=random(1, 6);
                        ra[i]=r;
                        $('.dice').append('<img class="token'+i+'" src="dado/dado'+r+'.png" style="width: '+ancho+'%; max-width: 200px; height: auto; cursor: pointer;">');
                        suma=r+suma;
                    }



                }

                $('.total').html('TOTAL: <strong>'+suma+'</strong>');

            }

            var cantidad = 5;

            roll();

            $(document).on("click", ".mas", function(){

                if(cantidad<10){

                    cantidad++;

                    reset();
                    roll();

                }

            });

            $(document).on("click", ".menos", function(){

                if(cantidad>1){

                    cantidad--;

                    reset();
                    roll();

                }

            });

            $(document).on("click", ".rollButton", function(){

                roll();

            });

            <?php

                for($i=1; $i<=10; $i++){

                    echo "

                        var token".$i." = false;

                        $(document).on('click', '.token".$i."', function(){

                            if(!token".$i."){

                                $('.token".$i."').css('filter', 'invert(100%)');

                                token".$i." = true;

                            }else{

                                $('.token".$i."').css('filter', 'invert(0%)');

                                token".$i." = false;

                            }

                        });

                    ";

                }

            ?>

            document.oncontextmenu = function(){ return false; }

            document.ondragstart = function(){ return false; }

            document.onselectstart = function(){ return false; }

        </script>

    </body>

</html>
