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

        <meta name='description' content='Infinite Levels Labyrinth - UNDERpost.net'>

        <meta name='keywords' content='Infinite Levels Labyrinth - UNDERpost.net'/>

        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>

        <meta name='reply-to' content='fcoverdugoa@gmail.com'>

        <meta name='url' content='https://underpost.net/laberinto/index.php'>

        <meta name='identifier-URL' content='https://www.underpost.net/laberinto/index.php'>

        <meta name='distribution' content='Global'>

        <meta name='language' content='EN'>

        <meta name='copyright'content='underpost.net'>

        <!-- Meta Social -->

        <meta name="twitter:card" value="summary">

        <meta property="og:title" content="Infinite Levels Labyrinth - UNDERpost.net" />

        <meta property="og:url" content="https://underpost.net/laberinto/index.php" />

        <meta property="og:image" content="https://underpost.net/img/underpost-social.png" />

        <meta property="og:description" content="Infinite Levels Labyrinth - UNDERpost.net" />

        <!-- Canonical -->

        <link rel="canonical" href="https://underpost.net/laberinto/index.php">

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

        <!-- Global site tag (gtag.js) - Google Analytics -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142681040-1"></script>

        <title>UNDERpost.net</title>

        <style>

        .map {

            position: absolute;
            width: 95%;
            height: 70%;
            top: 30px;
            max-width: 800px;
            transform: translate(-50%, 0%);
            left: 50%;
        }

        .buttonPanel {

            position: relative;
            width: 50%;
            height: 100%;
            max-width: 400px;
            float: right;

        }

        .panel {

            position: relative;
            width: 50%;
            height: 100%;
            max-width: 400px;
            float: left;
        }

        .button {

            width: 35px;
            height: 35px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            background: white;
            cursor: pointer;
            border-radius: 10px;
            color: black;
            font-weight: 700;

        }

        .center {

            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;

        }

        .ball {

            border-radius: 50%;
            background: white;
            position: absolute;

        }

        .resource {

            position: absolute;
            width: 100%;
            height: 30px;

        }

        .p1 {

            position: absolute;
            width: 95%;
            height: 50%;
            left: 5%;

        }

        .p2 {

            position: absolute;
            width: 95%;
            height: 50%;
            top: 50%;
            left: 5%;
            cursor: pointer;

        }

        .p2:hover {

            color: red;

        }

        .button:hover {
            opacity: 0.75;
        }

        .menu {

            position: absolute;
            width: 100%;
            max-width: 800px;
            transform: translate(-50%, 0%);
            left: 50%;
            height: 25%;
            top: 75%;

        }

        .flechas {

            display: none;

        }

        #level {

            width: 100%;
            font-size: 25px;
            font-weight: 700;
            top: 80%;
            text-align: center;
        }

        #solve {

            width: 100%;
            text-align: center;
            font-size: 10px;
            font-weight: 700;
        }

        </style>


    </head>

    <body>

        <div class='description' style='display: none;'><h1>Infinite Levels Labyrinth</h1></div>

        <a href='../'><div class='resource'><div class='center' style='width: 100%; text-align: center;'>Powered By <strong>UNDER</strong>post.net</div></div></a>

        <div class='map'></div>

        <div class='menu'>

            <div class='buttonPanel'>

                <div class='button' id='arriba' style='top: 25%;'><div class='center'>W</div></div>

                <div class='button' id='abajo' style='top: 75%;'><div class='center'>S</div></div>

                <div class='button' id='izquierda' style='left: 25%;'><div class='center'>A</div></div>

                <div class='button' id='derecha' style='left: 75%;'><div class='center'>D</div></div>

            </div>

            <div class='panel'>

                <div class='p1'>

                    <div class='center' id='level'>LEVEL 1</div>

                </div>

                <div class='p2'>

                    <div class='center' id='solve'>[ Optional Solution Here ]</div>

                </div>

            </div>

        </div>

        <script>

            function random(min, max) {

                return Math.floor(Math.random() * (max - min + 1) ) + min;

            }

            function GAME(numero, xii, yii, dim){


                //variables iniciales

                var yini=yii;
                var xini=xii;
                var numero=numero;
                var d=dim;

                //start game

                var play=false;

                var fin=false;


                var ancho =100/d;

                var topp=0;
                var left=0;

                for(var y=1;y<=d;y++){

                    for(var x=1;x<=d;x++){

                        var str= '<div class="'+x+'-'+y+'" data-s="false" style="position: absolute; border: 2px solid white; width: '+ancho+'%; height: '+ancho+'%; top: '+topp+'%; left: '+left+'%;"></div>';

                        $('.map').append(str);

                        left=left+ancho;
                    }

                    left=0;

                    topp=topp+ancho;

                }

                var iguardar = new Array();
                var jguardar= new Array();
                var indice=0;

                var i=xini;
                var j=yini;

                var stop=1;

                iguardar[indice]=i;
                jguardar[indice]=j;

                console.log(iguardar[indice]+'-'+jguardar[indice]);

                indice++;

                $('.'+(i)+'-'+(j)+'').attr('data-s', 'true');

                $('.'+(i)+'-'+(j)+'').css('background', 'red');

                $('.'+(i)+'-'+(j)+'').append('<div style="display: none; position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%; font-size: 8px; color: red;">'+stop+'</div>')

                play=true;

                stop++;


                var arriba=true;
                var abajo=true;
                var izquierda=true;
                var derecha=true;

                while(play && !fin){

                    stop++;

                    var ir=random(-1, 1);
                    var jr=random(-1, 1);

                    var diagonal=false;

                    if(Math.abs(ir)==1 && Math.abs(jr)==1){

                        diagonal=true;

                    }

                    if($('.'+(i+ir)+'-'+(j+jr)+'').attr('data-s')=='false' && !diagonal){

                        iguardar[indice]=i+ir;
                        jguardar[indice]=j+jr;

                        console.log(iguardar[indice]+'-'+jguardar[indice]);

                        indice++;

                        arriba=true;
                        abajo=true;
                        izquierda=true;
                        derecha=true;


                        $('.'+(i+ir)+'-'+(j+jr)+'').attr('data-s', 'true');

                        $('.'+(i+ir)+'-'+(j+jr)+'').css('background', 'red');

                        $('.'+(i+ir)+'-'+(j+jr)+'').append('<div style="display: none; position: absolute; transform: translate(-50%, -50%); left: 50%; top: 70%; font-size: 8px; color: red;">'+stop+'</div>');



                        if(ir==1 && jr==0){

                            $('.'+(i)+'-'+(j)+'').append('<div class="flechas" style="position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%;">&#8594;</div>');

                            $('.'+(i)+'-'+(j)+'').css('border-right', '2px solid red');

                            $('.'+(i+ir)+'-'+(j+jr)+'').css('border-left', '2px solid red');

                        }

                        if(ir==-1 && jr==0){

                            $('.'+(i)+'-'+(j)+'').append('<div class="flechas" style="position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%;">&#8592;</div>');

                            $('.'+(i)+'-'+(j)+'').css('border-left', '2px solid red');

                            $('.'+(i+ir)+'-'+(j+jr)+'').css('border-right', '2px solid red');
                        }

                        if(ir==0 && jr==1){

                            $('.'+(i)+'-'+(j)+'').append('<div class="flechas" style="position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%;">&#8595;</div>');

                            $('.'+(i)+'-'+(j)+'').css('border-bottom', '2px solid red');

                            $('.'+(i+ir)+'-'+(j+jr)+'').css('border-top', '2px solid red');

                        }

                        if(ir==0 && jr==-1){

                            $('.'+(i)+'-'+(j)+'').append('<div class="flechas" style="position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%;">&#8593;</div>');

                            $('.'+(i)+'-'+(j)+'').css('border-top', '2px solid red');

                            $('.'+(i+ir)+'-'+(j+jr)+'').css('border-bottom', '2px solid red');

                        }

                        i=(i+ir);
                        j=(j+jr);

                    }else{

                        if(ir==1 && jr==0){

                            derecha=false;

                        }

                        if(ir==-1 && jr==0){

                            izquierda=false;

                        }

                        if(ir==0 && jr==1){

                            abajo=false;

                        }

                        if(ir==0 && jr==-1){

                            arriba=false;

                        }

                        if(!derecha && !izquierda && !abajo && !arriba){

                            fin=true;

                        }

                    }

                }

                finx=iguardar[indice-1];
                finy=jguardar[indice-1];

                $('.'+iguardar[indice-1]+'-'+jguardar[indice-1]).css('background', 'black');

                for(var y=1;y<=d;y++){

                    for(var x=1;x<=d;x++){

                        if($('.'+x+'-'+y+'').attr('data-s')=='false'){

                            $('.'+(x)+'-'+(y)+'').css('background', 'red');

                            var r=random(1,10);

                            if(r==1){

                                if(y!=d){$('.'+(x)+'-'+(y)+'').css('border-bottom', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y+1)+'').css('border-top', '2px solid red');}

                            }

                            if(r==2){

                                if(y!=1){$('.'+(x)+'-'+(y)+'').css('border-top', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y-1)+'').css('border-bottom', '2px solid red');}

                            }

                            if(r==3){

                                if(x!=1){$('.'+(x)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(x!=1){$('.'+(x-1)+'-'+(y)+'').css('border-right', '2px solid red');}

                            }

                            if(r==4){

                                if(x!=d){$('.'+(x)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(x!=d){$('.'+(x+1)+'-'+(y)+'').css('border-left', '2px solid red');}


                            }

                            if(r==5){

                                if(y!=1){$('.'+(x)+'-'+(y)+'').css('border-top', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y-1)+'').css('border-bottom', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y)+'').css('border-bottom', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y+1)+'').css('border-top', '2px solid red');}
                            }

                            if(r==6){

                                if(x!=d){$('.'+(x)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(x!=d){$('.'+(x+1)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(x!=1){$('.'+(x)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(x!=1){$('.'+(x-1)+'-'+(y)+'').css('border-right', '2px solid red');}

                            }

                            if(r==7){

                                if(x!=d){$('.'+(x)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(x!=d){$('.'+(x+1)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y)+'').css('border-top', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y-1)+'').css('border-bottom', '2px solid red');}

                            }

                            if(r==8){

                                if(x!=d){$('.'+(x)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(x!=d){$('.'+(x+1)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y)+'').css('border-bottom', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y+1)+'').css('border-top', '2px solid red');}

                            }

                            if(r==9){

                                if(x!=1){$('.'+(x)+'-'+(y)+'').css('border-leftt', '2px solid red');}
                                if(x!=1){$('.'+(x-1)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y)+'').css('border-top', '2px solid red');}
                                if(y!=1){$('.'+(x)+'-'+(y-1)+'').css('border-bottom', '2px solid red');}

                            }

                            if(r==10){

                                if(x!=1){$('.'+(x)+'-'+(y)+'').css('border-left', '2px solid red');}
                                if(x!=1){$('.'+(x-1)+'-'+(y)+'').css('border-right', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y)+'').css('border-bottom', '2px solid red');}
                                if(y!=d){$('.'+(x)+'-'+(y+1)+'').css('border-top', '2px solid red');}

                            }



                        }

                    }


                }


                $('.map').append('<div class="ball" style="display: none; left: '+$('.'+(xini)+'-'+(yini)+'').css('left')+'; top: '+$('.'+(xini)+'-'+(yini)+'').css('top')+';"></div>');
                $('.ball').css('width', $('.'+(xini)+'-'+(yini)+'').css('width'));
                $('.ball').css('height', $('.'+(xini)+'-'+(yini)+'').css('height'));
                //$('.ball').css('border', '5px solid red');
                $('.ball').css('display', 'block');



            }

            var d=15;
            var xini=random(1, d);
            var yini=random(1, d);
            var numero=1;
            var finx=null;
            var finy=null;

            GAME(1, xini, yini, d);

            // white --> 2px solid rgb(255, 255, 255)
            //  red --> 2px solid rgb(255, 0, 0)

            $(document).on("click", "#arriba", function(){

                console.log($('.'+(xini)+'-'+(yini)+'').css('border-top-color'));

                if($('.'+(xini)+'-'+(yini)+'').css('border-top-color')=='rgb(255, 0, 0)'){

                    yini=yini-1;

                    $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                    });

                }

            });

            $(document).on("click", "#abajo", function(){

                console.log($('.'+(xini)+'-'+(yini)+'').css('border-bottom-color'));

                if($('.'+(xini)+'-'+(yini)+'').css('border-bottom-color')=='rgb(255, 0, 0)'){

                    yini=yini+1;

                    $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                    });

                }

            });

            $(document).on("click", "#derecha", function(){

                console.log($('.'+(xini)+'-'+(yini)+'').css('border-right-color'));

                if($('.'+(xini)+'-'+(yini)+'').css('border-right-color')=='rgb(255, 0, 0)'){

                    xini=xini+1;

                    $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                    });

                }

            });

            $(document).on("click", "#izquierda", function(){

                console.log($('.'+(xini)+'-'+(yini)+'').css('border-left-color'));

                if($('.'+(xini)+'-'+(yini)+'').css('border-left-color')=='rgb(255, 0, 0)'){

                    xini=xini-1;

                    $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                    });

                }

            });


            $(document).keypress(function(e) {

                e.preventDefault;
                var key = e.which;
                console.log(key);

                //UP
                if(key == 119 || key == 87){

                    if($('.'+(xini)+'-'+(yini)+'').css('border-top-color')=='rgb(255, 0, 0)'){

                        yini=yini-1;

                        $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                        });

                    }

                }

                //DOWN
                if(key == 115 || key == 83){

                    if($('.'+(xini)+'-'+(yini)+'').css('border-bottom-color')=='rgb(255, 0, 0)'){

                        yini=yini+1;

                        $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                        });

                    }

                }

                //RIGHT
                if(key == 100 || key == 68){

                    if($('.'+(xini)+'-'+(yini)+'').css('border-right-color')=='rgb(255, 0, 0)'){

                        xini=xini+1;

                        $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                        });

                    }

                }

                //LEFT 37
                if(key == 97 || key == 65){

                    if($('.'+(xini)+'-'+(yini)+'').css('border-left-color')=='rgb(255, 0, 0)'){

                        xini=xini-1;

                        $('.ball').animate({left: $('.'+(xini)+'-'+(yini)+'').css('left'), top: $('.'+(xini)+'-'+(yini)+'').css('top')}, 100, 'swing', function() {




                        });

                    }

                }

            });

            var arrow=false;

            $(document).on("click", ".p2", function(){

                if(!arrow){

                    $('.flechas').css('display', 'block');

                    $('#solve').html('[ Hide Solution ]');

                    arrow=true;

                }else{

                    $('.flechas').css('display', 'none');

                    $('#solve').html('[ Optional Solution Here ]');

                    arrow=false;

                }

            });

            function UPDATE() {

                setInterval(function(){

                    if(finx==xini   &&  finy==yini){

                       //console.log('fin');

                        $('.map').html('');

                        if(d<30){

                            d++;

                        }

                        xini=random(1, d);
                        yini=random(1, d);
                        numero++;
                        finx=null;
                        finy=null;

                        $('#level').html('LEVEL '+numero);

                        $('.flechas').css('display', 'none');

                        $('#solve').html('[ Optional Solution Here ]');

                        arrow=false;

                        GAME(numero, xini, yini, d);

                    }

                }, 1000);

            }

            UPDATE();

            document.oncontextmenu = function(){ return false; }

            document.ondragstart = function(){ return false; }

            document.onselectstart = function(){ return false; }

        </script>

    </body>


</html>
