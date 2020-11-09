<!DOCTYPE html>
<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

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

        <meta name='description' content='Cellular Automata Simulator - UNDERpost.net'>

        <meta name='keywords' content='Cellular Automata Simulator - UNDERpost.net'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/life'>

        <meta name='identifier-URL' content='https://www.underpost.net/life'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Cellular Automata Simulator - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/life" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Cellular Automata Simulator - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/life/index.php">

        <!-- favicon -->

        <link rel='icon' type='image/png' href='../assets/underpost.png' />

        <!-- <link rel='alternate' hreflang='es' href='URL'> -->

        <!--  android -->

        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

        <!--  ios -->

        <meta name='viewport' content='width=device-width, user-scalable=no' />

        <!--  css -->

        <link rel=StyleSheet href="index.css" type="text/css" media=all>

        <style>

        .content {

            position: absolute;
            top: 40px;
            width: 100%;
            transform: translate(-50%, 0);
            left: 50%;
            height: 95%;

        }

        .resource {

            position: absolute;
            transform: translate(-50%, 0);
            width: 100%;
            background:  none;
            height: 15px;
            top: 10px;
            left: 50%;

        }

        .center {

            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            color: auto;
            width: 80%;
            font-size: 10px;
            text-align: center;

        }

        </style>

        <!--  jquery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



        <title>UNDERpost.net</title>

    </head>

    <body>

        <div class='description' style='display: none;'><h1>Cellular Automata Simulator</h1></div>

        <div class='content'>

            <?php

                $top=0;
                $left=0;

                if(isset($_GET['d'])){

                    if($_GET['d']<=1000){

                        $long=$_GET['d'];

                    }else{

                        $long=25;

                    }

                }else{

                    $long=25;

                }

                for($y=1;$y<=$long;$y++){

                    for($x=1;$x<=$long;$x++){

                        echo "

                            <div class='".$x."-".$y."' data-c='true' data-cf='true' style='border-radius: 50%; /* border: 1px solid white; */ position: absolute; background: black; width: ".(100/$long)."%; height: ".(100/$long)."%; top: ".$top."%; left: ".$left."%;'>

                            <script>

                                $(document).on('click', '.".$x."-".$y."', function(){

                                    if(!play){

                                        if($('.".$x."-".$y."').attr('data-c')=='true'){

                                            $('.".$x."-".$y."').css('background', 'white');

                                            $('.".$x."-".$y."').attr('data-c', 'false');

                                            pop++;

                                            $('.populationt').html('POPULATION: '+pop);


                                        }else{

                                            $('.".$x."-".$y."').css('background', 'black');

                                            $('.".$x."-".$y."').attr('data-c', 'true');

                                            pop--;

                                            $('.populationt').html('POPULATION: '+pop);

                                        }

                                    }

                                });

                            </script>

                            </div>

                        ";

                        $left=$left+(100/$long);

                    }

                    $left=0;

                    $top=$top+(100/$long);

                }

            ?>


            <div class='php' style='display: none;'></div>

            <div class='play' style='cursor: pointer; position: absolute; top: 103%;  left: 0%; font-size: 14px; width: 33.3%; height: 5%;'>

                <div class='txtPlay' style='position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%; font-weight: 700;'>PLAY</div>

            </div>

            <div class='random' style='cursor: pointer; position: absolute; top: 103%;  left: 33.3%; font-size: 14px; width: 33.3%; height: 5%;'>

                <div style='position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%; font-weight: 700;'>RANDOM</div>

            </div>

            <div class='reset' style='cursor: pointer; position: absolute; top: 103%; left: 66.6%; font-size: 14px; width: 33.3%; height: 5%;'>

                <div style='position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%; font-weight: 700;'>RESET</div>

            </div>

            <div class='population' style='position: absolute; top: 99%; left: 0%; width: 50%; height: 5%;'>

                <div class='populationt' style='position: absolute; left: 50%; top: 50%; font-weight: 700;  font-size: 8px; transform: translate(-50%, -50%);'>POPULATION: 0</div>

            </div>

            <div class='generation' style='position: absolute; top: 99%; left: 50%; width: 50%; height: 5%;'>

                <div class='generationt' style='position: absolute; left: 50%; top: 50%; font-weight: 700;  font-size: 8px; transform: translate(-50%, -50%);'>GENERATION: 0</div>

            </div>

        </div>

        <a href='../'>

            <div class='resource'>

                <div class='center'>

                    Powered by <strong style='font-size: 10px;'>UNDER</strong>post.net

                </div>

            </div>

        </a>

        <script>

            function random(min, max) {

                return Math.floor(Math.random() * (max - min + 1) ) + min;

            }

            var pop=0;

            var play=false;

            var generation=0;

            $(document).on('click', '.play', function(){

                if(play){

                    play=false;

                    $('.txtPlay').html('PLAY');


                }else{

                    play=true;

                    $('.txtPlay').html('PAUSE');

                }


            });



            $(document).on('click', '.random', function(){

                generation=0;

                pop=0;

                play=false;

                $('.txtPlay').html('PLAY');

                $('.generationt').html('GENERATION: 0');

                $('.populationt').html('POPULATION: 0');


                for(var j=1;j<=<?php echo $long; ?>;j++){

                    for(var i=1;i<=<?php echo $long; ?>;i++){

                        if(random(0,1)==0){

                            $('.'+i+'-'+j).css('background', 'white');

                            $('.'+i+'-'+j).attr('data-c', 'false');

                            $('.'+i+'-'+j).attr('data-cf', 'false');

                            pop++;


                        }else{

                            $('.'+i+'-'+j).css('background', 'black');

                            $('.'+i+'-'+j).attr('data-c', 'true');

                            $('.'+i+'-'+j).attr('data-cf', 'true');

                        }

                    }

                    $('.populationt').html('POPULATION: '+pop);

                }


            });


            $(document).on('click', '.reset', function(){

                generation=0;

                pop=0;

                play=false;

                $('.txtPlay').html('PLAY');

                $('.generationt').html('GENERATION: 0');

                $('.populationt').html('POPULATION: 0');

                //reset

                for(var j=1;j<=<?php echo $long; ?>;j++){

                    for(var i=1;i<=<?php echo $long; ?>;i++){

                        $('.'+i+'-'+j).css('background', 'black');

                        $('.'+i+'-'+j).attr('data-c', 'true');

                        $('.'+i+'-'+j).attr('data-cf', 'true');

                    }

                }

            });

            function UPDATE() {

                setInterval(function(){

                    if(play){

                        generation++;

                        $('.generationt').html('GENERATION: '+generation);

                        //algoritmo

                        play=false;

                        for(var j=1;j<=<?php echo $long; ?>;j++){

                            for(var i=1;i<=<?php echo $long; ?>;i++){

                                var live=0;

                                var dead=0;

                                //4

                                if($('.'+(i-1)+'-'+(j)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //6

                                if($('.'+(i+1)+'-'+(j)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //1

                                if($('.'+(i-1)+'-'+(j-1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //2

                                if($('.'+(i)+'-'+(j-1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //3

                                if($('.'+(i+1)+'-'+(j-1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //7

                                if($('.'+(i-1)+'-'+(j+1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //8

                                if($('.'+(i)+'-'+(j+1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                //9

                                if($('.'+(i+1)+'-'+(j+1)).attr('data-c')=='false'){

                                    live++;

                                }else{

                                    dead--;

                                }

                                if($('.'+(i)+'-'+(j)).attr('data-c')=='false'){

                                    if(live==2 || live==3){

                                        $('.'+(i)+'-'+(j)).attr('data-cf', 'false');


                                    }else{

                                        $('.'+(i)+'-'+(j)).attr('data-cf', 'true');

                                    }

                                }else{

                                    if(live==3){

                                        $('.'+(i)+'-'+(j)).attr('data-cf', 'false');

                                    }

                                }

                                if($('.'+(i)+'-'+(j)).attr('data-c')!=$('.'+(i)+'-'+(j)).attr('data-cf')){


                                    if($('.'+(i)+'-'+(j)).attr('data-cf')=='false'){

                                        pop++;

                                        $('.populationt').html('POPULATION: '+pop);


                                    }else{

                                        pop--;

                                        $('.populationt').html('POPULATION: '+pop);

                                    }

                                }

                            }

                        }


                        for(var j=1;j<=<?php echo $long; ?>;j++){

                            for(var i=1;i<=<?php echo $long; ?>;i++){

                                if($('.'+(i)+'-'+(j)).attr('data-cf')=='false'){

                                    $('.'+(i)+'-'+(j)).css('background', 'white');

                                }else{

                                    $('.'+(i)+'-'+(j)).css('background', 'black');

                                }

                                $('.'+(i)+'-'+(j)).attr('data-c', (''+$('.'+(i)+'-'+(j)).attr('data-cf')));

                            }

                        }

                        play=true;

                    }

                }, 10);

            }

            UPDATE();





            if(<?php if(isset($_GET['r'])){echo "false";}else{echo "true";} ?>){

                for(var j=1;j<=<?php echo $long; ?>;j++){

                    for(var i=1;i<=<?php echo $long; ?>;i++){

                        if(random(0,1)==0){

                            $('.'+i+'-'+j).css('background', 'white');

                            $('.'+i+'-'+j).attr('data-c', 'false');

                            $('.'+i+'-'+j).attr('data-cf', 'false');

                            pop++;


                        }else{

                            $('.'+i+'-'+j).css('background', 'black');

                            $('.'+i+'-'+j).attr('data-c', 'true');

                            $('.'+i+'-'+j).attr('data-cf', 'true');

                        }

                    }

                    $('.populationt').html('POPULATION: '+pop);

                    play=true;

                    $('.txtPlay').html('PAUSE');

                }

            }

        </script>

    </body>

</html>
