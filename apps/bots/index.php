<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        <!-- meta -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142681040-1"></script>

      	<script>

      	  window.dataLayer = window.dataLayer || [];

      	  function gtag(){dataLayer.push(arguments);}

      	  gtag('js', new Date());

      	  gtag('config', 'UA-142681040-1');

      	  gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.

      	</script>



        <meta http-equiv='expires' content='0'>

        <meta http-equiv='Cache-Control' content='no-cache'>

        <meta http-equiv='Pragma' content='no-cache'>

        <meta name='description' content='Bot Virtual World Simulator - UNDERpost.net'>

        <meta name='keywords' content='Bot Virtual World Simulator - UNDERpost.net'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/bots'>

        <meta name='identifier-URL' content='https://www.underpost.net/bots'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Bot Virtual World Simulator - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/bots" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Bot Virtual World Simulator - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/bots/index.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='../assets/underpost.png' />

        <!-- <link rel='alternate' hreflang='es' href='URL'> -->

        <!--  android -->

        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

        <!--  ios -->

        <meta name="viewport" content="width=device-width, user-scalable=no" />

        <!--  css -->

        <link rel=StyleSheet href="index.css" type="text/css" media=all>

        <style>

            .map{

                position: absolute;
                width: 90%;
                height: 90%;
                transform: translate(-50%, 0);
                left: 50%;

            }

        </style>

        <!--  jquery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <title>UNDERpost.net</title>

    </head>

    <body>

        <div class="description" style="display: none;"><h1>Bot Virtual World Simulator</h1></div>

        <div class="map">

            <?php

                $arrayColor[1]="red";
                $arrayColor[2]="pink";
                $arrayColor[3]="gray";
                $arrayColor[4]="yellow";
                $arrayColor[5]="blue";
                $arrayColor[6]="green";
                $arrayColor[7]="purple";
                $arrayColor[8]="orange";
                $arrayColor[9]="white";

                //DATA GENERATE

                for($i=1;$i<=15;$i++){

                    $x[$i]=rand(0, 100);
                    $y[$i]=rand(0, 100);
                    $color[$i]=rand(1, 9);
                    $vel[$i]=rand(250, 900);

                }

                for($i=1;$i<=15;$i++){

                    echo "

                        <div class='wave".$i."' style='display: none;'></div>

                        <div class='".$i."' style='display: none;'>

                            <div class='id".$i."'>BOT#".$i."</div>

                            <div class='script".$i."' style='display: none;'>

                                <script>

                                    $('.".$i."').attr('data-x', '".$x[$i]."');
                                    $('.".$i."').attr('data-y', '".$y[$i]."');
                                    $('.".$i."').attr('data-color', '".$color[$i]."');
                                    $('.".$i."').attr('data-vel', '".$vel[$i]."');
                                    $('.".$i."').attr('data-connect', '');
                                    $('.".$i."').attr('data-fatigue', '0');
                                    $('.".$i."').attr('data-lfatigue', '".rand(1, 10)."');

                                    $('.".$i."').css('top', '".$y[$i]."%');
                                    $('.".$i."').css('left', '".$x[$i]."%');
                                    $('.".$i."').css('position', 'absolute');
                                    $('.".$i."').css('width', '30px');
                                    $('.".$i."').css('height', '30px');
                                    $('.".$i."').css('background', '".$arrayColor[$color[$i]]."');
                                    $('.".$i."').css('z-index', '".(100+($y[$i]))."');
                                    $('.".$i."').css('transform', 'translate(-50%, -50%)');
                                    $('.".$i."').css('border-radius', '50%');
                                    $('.".$i."').css('-moz-border-radius', '50%');
                                    $('.".$i."').css('-webkit-border-radius', '50%');
                                    $('.".$i."').css('border', '3px solid #2e2e2e');
                                    $('.".$i."').css('display', 'block');

                                    $('.wave".$i."').css('top', '".$y[$i]."%');
                                    $('.wave".$i."').css('left', '".$x[$i]."%');
                                    $('.wave".$i."').css('position', 'absolute');
                                    $('.wave".$i."').css('width', '30px');
                                    $('.wave".$i."').css('height', '30px');
                                    $('.wave".$i."').css('background', '".$arrayColor[$color[$i]]."');
                                    $('.wave".$i."').css('z-index', '".$y[$i]."');
                                    $('.wave".$i."').css('transform', 'translate(-50%, -50%)');
                                    $('.wave".$i."').css('border-radius', '50%');
                                    $('.wave".$i."').css('-moz-border-radius', '50%');
                                    $('.wave".$i."').css('-webkit-border-radius', '50%');

                                    $('.id".$i."').css('top', '-10px');
                                    $('.id".$i."').css('left', '50%');
                                    $('.id".$i."').css('position', 'absolute');
                                    $('.id".$i."').css('transform', 'translate(-50%, -50%)');
                                    $('.id".$i."').css('font-size', '12px');
                                    $('.id".$i."').css('font-weight', '700');

                                    function UPDATE".$i."(){

                                        var x".$i."=parseFloat($('.".$i."').attr('data-x'))+random(-15, 15);
                                        var y".$i."=parseFloat($('.".$i."').attr('data-y'))+random(-15, 15);


                                        if(x".$i.">90){

                                            x".$i."=90;

                                        }

                                        if(x".$i."<10){

                                            x".$i."=10

                                        }

                                        if(y".$i.">90){

                                            y".$i."=90;

                                        }

                                        if(y".$i."<10){

                                            y".$i."=10

                                        }

                                        var index".$i."=100+y".$i.";

                                        $('.".$i."').attr('data-x', (''+x".$i."));
                                        $('.".$i."').attr('data-y', (''+y".$i."));

                                        $('.".$i."').stop();

                                        $('.".$i."').css('z-index', (''+index".$i."));

                                        $('.".$i."').animate({left: (x".$i."+'%'), top: (y".$i."+'%')}, random(500, 1500), 'swing', function() {



                                        });

                                        if(random(0, 1)==1){

                                            $('.".$i."').css('background', (''+arrayColor[random(1, 9)]));

                                        }

                                        if(random(0, 1)==1){

                                            $('.wave".$i."').css('top', $('.".$i."').css('top'));

                                            $('.wave".$i."').css('left', $('.".$i."').css('left'));

                                            $('.wave".$i."').css('width', '30px');

                                            $('.wave".$i."').css('height', '30px');

                                            $('.wave".$i."').css('z-index', '".rand(1, 99)."');

                                            $('.wave".$i."').css('background', $('.".$i."').css('background'));

                                            $('.wave".$i."').css('display', 'block');

                                            $('.wave".$i."').stop();

                                            $('.wave".$i."').animate({width: '65px', height: '65px'}, 500, 'swing', function() {

                                                $('.wave".$i."').fadeOut(400);

                                            });

                                        }

                                    }

                                </script>

                            </div>

                        </div>

                    ";

                }

            ?>

        </div>

        <div class="resource">

            <style>

            .powered {

                position: fixed;
                width: 300px;
                height: auto;
                bottom: 5%;
                padding: 5px;
                text-align: center;
                transform: translate(-50%, 0);
                left: 50%;

            }

            </style>

            <br>

            <a href='../'>

                <div class='powered'>

                    <br>

                    <span>Powered By </span><strong>UNDER</strong><span>post.net</span>

                    <br>

                    <br>

                </div>

            </a>

        </div>

        <div class='update' style='display: none;'></div>

        <script type="text/javascript">


            var arrayColor = new Array();

            arrayColor[1]="red";
            arrayColor[2]="pink";
            arrayColor[3]="gray";
            arrayColor[4]="yellow";
            arrayColor[5]="blue";
            arrayColor[6]="green";
            arrayColor[7]="purple";
            arrayColor[8]="orange";
            arrayColor[9]="white";

            function random(min, max) {

                return Math.floor(Math.random() * (max - min + 1) ) + min;

            }

            function UPDATE() {

                setInterval(function(){

                    <?php

                        for($i=1;$i<=15;$i++){


                            echo "setTimeout(function(){ UPDATE".$i."(); }, ".rand(500, 2000).");";


                        }

                    ?>

                }, 1500);

            }

            UPDATE();

        </script>

    </body>


</html>
