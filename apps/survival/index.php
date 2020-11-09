<?php

    //header configuration

    //setcookie('samesite-test', '1', 0, 'SameSite=None; Secure');

    //header( "Set-Cookie: name=value; httpOnly" );

    //globar Parameters

    $volumeBot = 6;

?>
<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

        <meta name='description' content='Survival Ball Game By UNDERpost.net'>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142681040-1"></script>

        <script>

          window.dataLayer = window.dataLayer || [];

          function gtag(){dataLayer.push(arguments);}

          gtag('js', new Date());

          gtag('config', 'UA-142681040-1');

          gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.

        </script>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Survival Ball Game - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/survival/index.php" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Survival Ball Game - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/survival/index.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='../assets/underpost.png' />

        <!-- viewport -->

        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

        <meta name='viewport' content='width=device-width, user-scalable=no' />

        <!-- jquery -->

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

        <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>



        <!-- title -->

        <title>UNDERpost.net</title>

        <!-- data -->

        <script type='text/javascript' >

            //arrays

            var arrayColor = new Array();

            arrayColor[1]='red';
            arrayColor[2]='pink';
            arrayColor[3]='gray';
            arrayColor[4]='yellow';
            arrayColor[5]='blue';
            arrayColor[6]='green';
            arrayColor[7]='purple';
            arrayColor[8]='orange';
            arrayColor[9]='white';
            arrayColor[10]='teal';

            //global functions

            function random(min, max) {

                return Math.floor(Math.random() * (max - min + 1) ) + min;

            }

            function f(select, css){

                return parseFloat($(select).css(css).replace('px', ''));

            }

            function i(select, css){

                return parseInt($(select).css(css).replace('px', ''));

            }

        </script>

    </head>

    <body>

        <div class='credi' style='z-index: 9999; position: fixed; width: 100%; transform: translate(-50%, 0); left: 50%; text-align: center; top: 10px;'>

            Powered By <strong>UNDER</strong>post.net

        </div>

        <div style='display: none;'><h1>Survival Ball Game By UNDERpost.net</h1></div>

        <style>

            *{font-family: Arial; text-decoration: none; font-size: 14px;}

            html,body, #st-full-pg {

                width: 100%;
                height: 100%;
                margin: 0;
                background: black;
                color: white;
                position: relative;

                /*   url x y casoDelPuntero  */

                cursor : url('../assets/dinamic.cur') 0 0, auto;

            }

            /* link */
            a:link {

                color: white;

            }

            /* visited link */
            a:visited {

                color: white;

            }

            /* mouse over link */
            a:hover {

                color: red;

            }

            /* selected link */
            a:active {

                color: red;

            }

            ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */

              color: white;
              opacity: 1; /* Firefox */
              font-weight: bold;

            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */

              color: white;
              font-weight: bold;

            }

            ::-ms-input-placeholder { /* Microsoft Edge */

              color: white;
              font-weight: bold;

            }

            .credi:hover {
                color: red;
            }

        </style>

        <div class='topBar'>

            <style>

                .topBar {

                    position: absolute;
                    display: none;

                }

            </style>

        </div>

        <div class='map'>

            <style>

                .map  {

                    position: absolute;
                    background: black;
                    display: none;

                }

                #bot {

                    position: absolute;
                    display: none;
                    border: none;
                    border-radius: 50%;

                    /*           x y tamano intensidad color inset(sombra por dentro) , agregar otra capa shadow*/

                    box-shadow: 0px 0px 70px 0px white;
                    text-shadow: 0px 0px 10px black;

                }

                #miniBall {

                    border-radius: 50%;
                    box-shadow: 0px 0px 50px 0px white, 0px 0px 50px 0px white;
                    background: white;
                    z-index: 300;
                    display: none;
                    position: absolute;

                }

            </style>

            <?php

                for($i=1;$i<=$volumeBot;$i++){

                    echo "

                        <div class='ball".$i."' id='miniBall'></div>

                        <div class='".$i."' id='bot'>

                            <script type='text/javascript'>

                                //initial parameters

                                var color".$i." = 'white';
                                var shadowBackground".$i." = '0px 0px 70px 0px '+color".$i.";
                                var shadowTxt".$i." = '0px 0px 10px '+color".$i.";
                                var dano".$i." = 10;
                                //load css

                                $('.".$i."').css('box-shadow', shadowBackground".$i.");
                                $('.".$i."').css('background', color".$i.");
                                $('.".$i."').css('display', 'block');

                                //functions

                                var atkBool".$i." = true;

                                function atk".$i."(){

                                    if(atkBool".$i." && vidaBool && explodeIn".$i."){

                                        atkBool".$i." = false;

                                        vidaBool = false;

                                        $('.ball".$i."').css('top', ((f('.".$i."','top') + f('.".$i."','height')*(1/3) ) + 'px'));
                                        $('.ball".$i."').css('left', ((f('.".$i."','left') + f('.".$i."','width')/3 ) +'px'));
                                        $('.ball".$i."').css('display', 'block');

                                        $('.ball".$i."').animate({left: $('.life').css('left'), top: ((f('.life','top') - f('.topBar','height') + f('.life','width')*(1/3) )+'px')}, 500, 'swing', function() {

                                            $('.ball".$i."').fadeOut(200);

                                            atkBool".$i." = true;

                                            lifeRest = lifeRest+dano".$i.";

                                            $('.lifeBlack').animate({height: (lifeRest+'%')}, 200, 'swing', function() {

                                                if( lifeRest >= 100  ){

                                                    $('.lifeBlack').css('height', '0%');
                                                    lifeRest=0;

                                                }

                                                vidaBool = true;

                                            });


                                        });

                                    }

                                }

                                function translate".$i."(x, y){

                                    if(explodeIn".$i."){

                                        var x = random(0, 100);
                                        var y = random(0, 100);

                                        $('.".$i."').stop();

                                        var z = 100+Math.round(y);

                                        $('.".$i."').css('z-index', (''+z));

                                        $('.".$i."').animate({left: (x+'%'), top: (y+'%')}, random(2000, 3000), 'swing', function() {


                                        });

                                    }

                                }

                                var explodeIn".$i." = true;

                                function explode".$i."(){

                                    if(explodeIn".$i."){

                                        explodeIn".$i." = false;

                                        atkBool".$i." = false;

                                        $('.".$i."').css('box-shadow', 'none');

                                        $('.".$i."').stop();

                                        $('.".$i."').effect( 'explode', {pieces: 4}, 500, function() {

                                            $('.".$i."').css('box-shadow', shadowBackground".$i.");

                                            $('.".$i."').css('left', (random(0, 100)+'%'));

                                            $('.".$i."').css('top', (random(0, 100)+'%'));

                                            $('.".$i."').delay(1000).fadeIn(500);

                                            setTimeout(function(e){

                                                explodeIn".$i." = true;

                                            }, 1500);

                                            setTimeout(function(e){

                                                if(explodeIn".$i."){

                                                    atkBool".$i." = true;

                                                }

                                            }, 2000);

                                        });

                                        //recuperacion de vida

                                        lifeRest=lifeRest-10;

                                        if(lifeRest<=0){

                                            lifeRest=0;

                                        }

                                        vidaBool = false;

                                        $('.lifeBlack').animate({height: (lifeRest+'%')}, 200, 'swing', function() {

                                            vidaBool = true;

                                        });

                                    }

                                }



                                //events

                                $(document).ready(function(e) {

                                    $(document).on('click', '.".$i."', function(e){

                                        setTimeout(function(){

                                            explode".$i."();

                                        }, 200);

                                    });

                                });

                            </script>

                        </div>


                    ";

                }


            ?>

        </div>

        <div class='life'>

            <style>

                .life {

                    position: absolute;
                    display: none;
                    border-radius: 50%;
                    background: red;
                    box-shadow: 0px 0px 70px 0px red;
                    overflow: hidden;

                }

                .lifeBlack {

                    width: 100%;
                    transform: translate(-50%, 0);
                    position: absolute;
                    left: 50%;
                    background: black;

                }

            </style>

            <div class='ballLife'></div>

            <div class='lifeBlack'></div>

            <style>

                #ballUser {

                    background: red;
                    border-radius: 50%;
                    box-shadow: 0px 0px 50px 0px red, 0px 0px 50px 0px red;
                    z-index: 300;
                    display: none;
                    position: absolute;

                }

            </style>

            <script type='text/javascript'>

                var balls=0;

                $(document).on('click', 'body', function(e){

                    $('body').append('<div id="ballUser" class="ballUser'+balls+'">');

                    var selectBall='.ballUser'+balls;

                    var posX = e.pageX - $(this).offset().left - f('.ball1', 'width')/3;
                    var posY = e.pageY - $(this).offset().top - f('.ball1', 'width')/4;

                    $(selectBall).css('width', $('.ball1').css('width'));
                    $(selectBall).css('height', $('.ball1').css('height'));

                    $(selectBall).css('left', (  (f('body','width')/2 - f(selectBall, 'width')/2 ) + 'px'   ) );
                    $(selectBall).css('top', (  (f('.life','top') + f(selectBall, 'height') ) + 'px'   ) );
                    $(selectBall).css('display', 'block');

                    $(selectBall).animate({left: posX, top: posY}, 200, 'swing', function() {

                        $(selectBall).fadeOut(200);

                        setTimeout(function(){

                            $(selectBall).remove();

                        }, 200);

                    });

                    balls++;

                });

            </script>


        </div>

        <div class='load'>

            <style>

                .load {

                    position: absolute;
                    width: 100%;
                    background: black;
                    z-index: 999;

                }

            </style>

        </div>

        <div class='script' style='display: none;'></div>


        <script type='text/javascript' >

            function start() {

                setInterval(function(e){

                    if(play){

                        if(     (  $('body').css('width')!=$('.topBar').css('width')  ) || (  $('.load').css('height')!=$('body').css('height')  )      ){

                            configuration();

                        }

                        for(var i=1;i<=volumeBot;i++){

                            $('.script').html('<script> setTimeout(function(){ translate'+i+'(); }, random(500, 2000));');

                            $('.script').html('<script> setTimeout(function(){ atk'+i+'(); }, random(100, 5000));');

                        }

                    }

                }, 2000);

            }

            function ini(){

                $('.load').delay(100).fadeOut(300);

                $('.topBar').css('display', 'block');
                $('.map').css('display', 'block');
                $('.life').css('display', 'block');

                for(var i=1;i<=volumeBot;i++){

                    $('.'+i).css('top', ((random(0, 100)+'%')));
                    $('.'+i).css('left', ((random(0,100)+'%')));

                }

                setTimeout(function(){

                    vidaBool= true;
                    play=true;

                }, 2500);

            }

            function configuration(){

                //load

                    $('.load').css('height', $('body').css('height'));

                //topBar

                    $('.topBar').css('width', $('body').css('width'));
                    $('.topBar').css('height', ((f('body','height')*0.1)+'px'));

                //bot size

                    var Xpx = f('body','width');
                    var Ypx = f('body','height');

                    if(Xpx>=Ypx){

                        pxG=Xpx;

                    }else{

                        pxG=Ypx;

                    }

                    var pxG = pxG*0.1;

                    for(var i=1;i<=volumeBot;i++){

                        $('.'+i).css('width', (pxG+'px'));
                        $('.'+i).css('height', (pxG+'px'));

                        $('.ball'+i).css('width', ((pxG/3)+'px'));
                        $('.ball'+i).css('height', ((pxG/3)+'px'));

                    }

                //map

                    $('.map').css('top', $('.topBar').css('height'));
                    $('.map').css('left', ((f('.1','height')*(1/3))+'px'));
                    $('.map').css('width', ((f('body','width') - f('.1','width') - f('.1','height')*(2/3)) + 'px'));
                    $('.map').css('height', ((f('body','height') - f('.topBar','height') - f('.1','height')*2 - 10)+'px'));

                //life

                    $('.life').css('top', (f('body','height') - f('.1','height') - 10) + 'px');
                    $('.life').css('left',  ((f('.topBar','width')/2 - f('.1','width')/2)  +'px'));
                    $('.life').css('width', $('.1').css('width'));
                    $('.life').css('height', $('.1').css('width'));

            }

            //start

            var volumeBot= <?php echo $volumeBot; ?>;
            var vidaBool = false;
            var play = false;
            var lifeRest= 0;

            $(document).ready(function(e) {

                //DOM manipulation code

                configuration();

                ini();

                start();

                //parseInt/Float .replace(/px/g PARATODO, '') ('antes', 'despues')
                //lista .split('separador')  .join('unidor')

                //events

                $(document).keypress(function(e) {

                    e.preventDefault;
                    var key = e.which;

                    if(key == 13){

                        if(play){

                            play=false;

                        }else{

                            play=true;
                        }

                    }

                });

            });

            $(document).on('click', '.credi', function(e){

                window.location.href = 'https://underpost.net';

            });

            document.oncontextmenu = function(){ return false; }

            document.ondragstart = function(){ return false; }

            document.onselectstart = function(){ return false; }

        </script>

    </body>

</html>
