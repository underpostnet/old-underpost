
<!DOCTYPE html>

<?php
                
    require('connect.php');

    $sql = $mysqli->query('INSERT INTO `cyberia` (`id`) VALUES (NULL);');
                
?>

<html lang='en'>
    
    <head>
        
        <!-- meta -->
        
        <!-- ... -->
        
        <!-- favicon -->
        
        <link rel='icon' type='image/png' href='../img/underpost.png' />
        
        <!-- Canonical -->
        
        <link rel='canonical' href='https://underpost.net/cyberia/index.php'>
        
        <!-- <link rel='alternate' hreflang='es' href='URL'> -->
        
        <!--  android -->
        
        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
        
        <!--  ios -->
        
        <meta name='viewport' content='width=device-width, user-scalable=no' />
        
        <link rel='apple-touch-icon' sizes='269x269' href='../img/underpost.png' /> 
        
        <!--  jquery -->
        
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        
        <script src='//code.jquery.com/jquery-1.12.4.js'></script>
        
        <script src='//code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
        
        <!-- Pusher -->
        
        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        
        <!-- Arrays -->
        
        <script src="arrays.js"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-142681040-1'></script>
        
        <script>
        
          window.dataLayer = window.dataLayer || [];
          
          function gtag(){dataLayer.push(arguments);}
          
          gtag('js', new Date());
        
          gtag('config', 'UA-142681040-1');
          
          gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesi贸n.
          
        </script>
        
        <!-- title -->
        
        <title>UNDERpost.net</title>

    </head>
    
    <body>
        
        <style>
        
            *{font-family: Arial; text-decoration: none; font-size: 14px;}

            html,body, #st-full-pg {
                
                width: 100%;
                height: 100%;
                margin: 0;
                background: black;
                color: white;
                position: relative;
                
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
        
        </style>
        
        <div style='display: none;'><h1>CYBERIA VIRTUAL WORLD</h1></div>
        
        <div class='cover'>
            
            <style>
            
                .cover {
                    
                    background: #101010;
                    width: 100%;
                    max-width: 800px;
                    position: absolute;
                    display: block;
                    transform: translate(-50%, 0);
                    left: 50%;
                    height: 100%;
                    
                }
            
            </style>
            
            
            <div class='map'>
                
                
                <style>
                    
                    .map {
                        
                        
                        position: absolute;
                        transform: translate(-50%, -50%);
                        width: 80%;
                        height: 80%;
                        top: 50%;
                        left: 50%;
                        background: black;
                        
                        
                    }
                    
                    #userContent {
                        
                        position: absolute;
                        /* border-radius: 50%;  */
                        /* border: 5px solid #101010;  */
                        width: 40px;
                        height: 40px;
                        transform: translate(-50%, -50%);
                        text-shadow: 0 0 10px black, 0 0 10px white;
                        font-weight: bold;
                        
                    }
                    
                    #skin {
                        
                        position: absolute;
                        transform: translate(-50%, -50%);
                        left: 50%;
                        top: 50%;
                        width: 40px;
                        height: 40px;
                        
                    }
                    
                    #centerDiv {
                        
                        position: absolute;
                        transform: translate(-50%, -50%);
                        left: 50%;
                        top: 50%;
                        
                    }
                    
                </style>
                
                
                
                
                
                
                
            </div>
        
           
            
        </div>
        
        <script type='text/javascript'>
            
            //JQuery functions
        
            $(document).keypress(function(e) {
        
                e.preventDefault;
                var key = e.which;
                
                //if(key == ''){}
                
            });
            
            $(document).on('click', '.map', function(e){
                
                var posX = $(this).offset().left;
                var posY = $(this).offset().top;
                
                x=(((e.pageX - posX)*100)/$(".map").width());
                y=(((e.pageY - posY)*100)/$(".map").height());
                
                translate<?php  echo $mysqli->insert_id; ?>(x, y, 'block');
                
                socket(id, 'block', x, y, color, clase, 'translate', 'index');
                
            });
            
            //JS functions
            
            function socket(fid, fdisplay, fx, fy, fcolor, fclase, fevent, fchannel){
                
                $.ajax({
                        
                    url : 'server.php',
                    dataType : 'JSON',
                    method : 'POST',
                    data : {
                        
                        id : (''+fid),
                        x : (''+fx),
                        y : (''+fy),
                        color : (''+fcolor),
                        clase: (''+fclase),
                        display: (''+fdisplay),
                        event: (''+fevent),
                        channel: (''+fchannel)
                        
                    }
                            
                })
                
            }
        
            function random(min, max) {
                
                return Math.floor(Math.random() * (max - min + 1) ) + min;
                
            }
            
            function newUser(fid, fdisplay, fx, fy, fcolor, fclase){
                
                //load css
                
                $('.map').append('<div class="'+fid+'" id="userContent" data-clase="'+fclase+'" data-x="'+fx+'" data-y="'+fy+'" style="top: '+fy+'%; left: '+fx+'%; color: '+fcolor+'; display: '+fdisplay+';"></div>');
                
                //load script
                    
                $('.'+fid).load('metaObject.php?id='+fid)
                
                
            }
            
            //pusher events
            
            Pusher.logToConsole = true;
        
            var pusher = new Pusher('774521531d43f8610e9d', {
              cluster: 'us2',
              forceTLS: true
            });
        
            var channel = pusher.subscribe('index');
            
            channel.bind('translate', function(data) {
                
                if(data.id!=id){
                    
                    if($('.'+data.id).length){
                    
                        $('.script'+data.id).html('<script>translate'+data.id+'('+data.x+','+data.y+', "'+data.display+'");');
                    
                    }else{
                    
                        newUser(data.id, data.display, data.x, data.y, data.color, data.clase);
                        
                        socket(id, $('.'+id).css('display'), x, y, color, clase, 'translate', 'index');
                        
                    }
                    
                }
                
            });
            
            //user variables
            
            <?php  echo 'var id='.$mysqli->insert_id.';'; ?>
            
            var x = random(0, 100);
            var y = random(0, 100);
            var color = arrayColor[random(1,8)];
            var clase = 'android';
            
            //start
            
            newUser(id, 'block', x, y, color, clase);
            
            socket(id, $('.'+id).css('display'), x, y, color, clase, 'translate', 'index');
            
            //IA
            
            var ids = new Array();
            var xs = new Array();
            var ys = new Array();
            var colors = new Array();
            var clases = new Array();
            
            var IAusers = 5;
            
             for(var i=1;i<=IAusers;i++){
                
                ids[i]=i;
                xs[i]=random(1, 100);
                ys[i]=random(1, 100);
                colors[i]='white';
                clases[i]=arrayClase[random(1,9)];
                
                newUser(ids[i], 'Block', xs[i], ys[i], colors[i], clases[i]);
                
            }
            
            function translateIA() {
                
                setInterval(function(){
                    
                    for(var i=1;i<=IAusers;i++){
                        
                        xs[i]=xs[i]+random(-8, 8);
                        ys[i]=ys[i]+random(-8, 8);
                        
                        if(xs[i]<0){
                            xs[i]=0;
                        }
                        if(xs[i]>100){
                            xs[i]=100;
                        }
                        if(ys[i]<0){
                            ys[i]=0;
                        }
                        if(ys[i]>100){
                            ys[i]=100;
                        }
                        
                            
                        $('.script'+ids[i]).html('<script>setTimeout(function(){translate'+ids[i]+'('+xs[i]+','+ys[i]+', "block");}, '+random(300, 1500)+');');
                        
                    }
                    
                }, 1000);
                
            }
            
            translateIA();
            
            //protect
            
            //document.oncontextmenu = function(){ return false; }
           
            document.ondragstart = function(){ return false; }
           
            document.onselectstart = function(){ return false; }
        
        </script>
        
        
    </body>
    
    
</html>
    
    