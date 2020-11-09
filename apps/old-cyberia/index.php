<!DOCTYPE html>

<?php
                
    require('connect.php');
    
    setcookie('samesite-test', '1', 0, 'SameSite=None; Secure');
    
    header( "Set-Cookie: name=value; httpOnly" );

    $sql = $mysqli->query('INSERT INTO `cyberia` (`id`) VALUES (NULL);');
    
    $ancho=1000;
                
?>

<html>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <!-- meta -->
        
        <meta http-equiv='expires' content='0'>
 
        <meta http-equiv='Cache-Control' content='no-cache'>
 
        <meta http-equiv='Pragma' content='no-cache'>
        
        <meta name='description' content='Cyberia Cafe & Club - Chat & Game - Virtual World'>
        
        <meta name='keywords' content='Cyberia Cafe & Club - Chat & Game - Virtual World'/>
        
        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>
        
        <meta name='reply-to' content='fcoverdugoa@gmail.com'>
        
        <meta name='url' content='https://underpost.net/cyberia/index.php'>
        
        <meta name='identifier-URL' content='https://www.underpost.net/cyberia/index.php'>
        
        <meta name='distribution' content='Global'>
        
        <meta name='language' content='EN'>
        
        <meta name='copyright'content='underpost.net'>
        
        <!-- Meta Social -->
        
        <meta name='twitter:card' value='summary'>

        <meta property='og:title' content='UNDERpost.net' />
        
        <meta property='og:title' content='UNDERpost.net' />
        
        <meta property='og:type' content='Cyberia Cafe & Club - Chat & Game - Virtual World' />

        <meta property='og:url' content='https://underpost.net/cyberia/index.php' />

        <meta property='og:image' content='https://underpost.net/img/cyberia.png' />

        <meta property='og:description' content='Cyberia Cafe & Club - Chat & Game - Virtual World' />
        
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
        
        <!-- Pusher -->
        
        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        
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
        
        <div class='loading'>
            
            <style>
            
             html,body, #st-full-pg {

                overflow: hidden;
                
            
              }
            
                .loading {
                    
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    background: black;
                
                }
                
                .loadingIMG {
                    
                    width: 250px;
                    height: auto;
                    
                    
                }
                
                .loadingContent {
                    
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                    text-align: center;
                    
                }
            
            </style>
            
            <div class='loadingContent'>
                
                <img class='loadingIMG' src='../img/loading1.gif'>
                
                <br>
                
                <strong style='position: relative; top: -40px;'>LOADING</strong>
            
            </div>
            
        </div>
        
        <style>
        
            *{font-family: Arial; text-decoration: none; font-size: 14px;}

            html,body, #st-full-pg {
                
                width: 100%;
                height: 100%;
                margin: 0;
                background: black;
                color: white;
                position: relative;
                cursor : url('../img/cursor/dinamic.cur') 0 0, auto;
                
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
        
        <div class='main' style='display: none;'>
        
            <div class='cover'>
                
                <style>
                
                    .cover {
                        
                        background: #101010;
                        width: 100%;
                        max-width: <?php echo $ancho."px"; ?>;
                        position: absolute;
                        display: block;
                        transform: translate(-50%, 0);
                        left: 50%;
                        height: 70%;
                        bottom: 30%;
                        
                    }
                
                </style>
                
                <div class='topBar'>
                    
                    <style>
                    
                        .topBar {
                                
                            position: absolute;
                            transform: translate(-50%, 0%);
                            width: 100%;
                            height: 10%;
                            top: 0%;
                            left: 50%;
                            background: black;
                            /* text-shadow: 0 0 10px black, 0 0 15px white; */
                            
                        }
                        
                        .topPVE:hover, .topPVP:hover, .topConfig:hover {
                            
                            opacity: 0.6;
                            cursor: pointer;
                            
                        }
                        
                        .topPVE {
                            
                            position: absolute;
                            left: 0%;
                            top: 0%;
                            width: <?php echo (100/3); ?>%;
                            height: 100%;
                            
                        }
                        
                        .topPVP {
                            
                            position: absolute;
                            left: <?php echo (100/3); ?>%;
                            top: 0%;
                            width: <?php echo (100/3); ?>%;
                            height: 100%;
                            
                        }
                        
                        .topConfig {
                            
                            position: absolute;
                            left: <?php echo (100/3)*2; ?>%;
                            top: 0%;
                            width: <?php echo (100/3); ?>%;
                            height: 100%;
                            
                        }
                        
                        .txtTop {
                            
                            position: absolute;
                            transform: translate(-50%, -50%);
                            left: 50%;
                            top: 50%;
                            font-weight: bold;
                            font-size: 25px;
                            
                        }
                    
                    </style>
                    
                    <div class='topPVE' style='color: #00FF00;'>
                        
                        <div class='txtTop'>PVE</div>
                        
                    </div>
                    
                    <div class='topPVP' style='color: gray;'>
                        
                        <div class='txtTop'>PVP</div>
                        
                    </div>
                    
                    <div class='topConfig' style='color: white;'>
                        
                        <div class='txtTop'>CONFIG</div>
                        
                    </div>
                    
                    <script>
                    
                        var users = new Array();
                        
                        $(document).on('click', '.topConfig', function(e){
                            
                            $('.main').css('display', 'none');
                            
                            $('.config').fadeIn(500);
                            
                        });
                    
                        $(document).on('click', '.topPVP', function(e){
                           
                            $('.topPVP').css('color', 'red');
                            $('.topPVE').css('color', 'gray');
                            
                            map='PVP';
                            
                            for(var i=1;i<=botVolume;i++){
                                
                                $('.'+i).css('display', 'none');
                                
                            }
                            
                            socket(id, channel, event, 'block', clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
                           
                        });
                        
                        $(document).on('click', '.topPVE', function(e){
                           
                            $('.topPVP').css('color', 'gray');
                            $('.topPVE').css('color', '#00FF00');
                            
                            map='PVE';
                            
                            for(var i=1;i<=botVolume;i++){
                                
                                $('.'+i).css('display', 'block');
                                
                            }
                            
                            for(var i=0;i<users.length;i++){
                                
                                $('.'+users[i]).css('display', 'none');
                                
                            }
                            
                            socket(id, channel, event, 'none', clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
                           
                        });
                    
                    </script>
                    
                </div>
                
                <div class='map'>
                    
                    <style>
                        
                        .map {
                            
                            
                            position: absolute;
                            transform: translate(-50%, 0%);
                            width: 100%;
                            height: 90%;
                            top: 10%;
                            left: 50%;
                            background: black;
                            
                            
                        }
                        
                        .greenArrow {
                            
                            position: absolute;
                            left: 50%;
                            transform: translate(-50%, 0);
                            width: 40px;
                            top: -35px;
                            
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
                            /* cursor: pointer; */
                            
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
                        
                        #lifefull {
                            
                            position: absolute;
                            transform: translate(-50%, 0);
                            left: 50%;
                            width: 50px;
                            height: 8px;
                            top: -8px;
                            border-radius: 3px;
                            background: #3B3B3B;
                            
                        }
                        
                        #life {
                            
                            height: 100%;
                            background: #00FF00;
                            border-radius: 3px;
                            
                        }
                        
                        #name {
                            
                            position: absolute;
                            transform: translate(-50%, -50%);
                            left: 50%;
                            top: 50%;
                            top: -15px; 
                            font-size: 10px;
                            
                        }
                        
                        #power {
                            
                            position: absolute;
                            width: 13px;
                            height: 13px;
                            border-radius: 50%;
                            background: #00FF00;
                            transform: translate(-50%, -50%);
                            display: none;
                            
                        }
                        
                    </style>
                    
                </div>
                
            </div>
            
            <div class='death'>
                
                <style>
                
                    .death {
                        
                        position: absolute;
                        transform: translate(-50%, 0);
                        left: 50%;
                        width: 100%;
                        height: 100%;
                        background: black;
                        opacity: 0.8;
                        display: none;
                        max-width: <?php echo $ancho."px"; ?>;
                        
                    }
                    
                    .count1, .count2, .count3, .count4, .count5, .count0 {
                        
                        position: absolute;
                        transform: translate(-50%, -50%);
                        left: 50%;
                        top: 50%;
                        display: none;
                        font-weight: bold;
                        font-size: 50px;
                        width: 100%;
                        text-align: center;
                        
                    }
                    
                    .msgDeath {
                        
                        position: absolute;
                        transform: translate(-50%, -50%);
                        left: 50%;
                        top: 40%;
                        width: 100%;
                        text-align: center;
                        
                    }
                
                </style>
                
                <div class='msgDeath'>
                    
                    YOU ARE <span style='color: red; font-weight: bold;'>DEATH</span>
                    
                    <br>
                    
                    <br>
                    
                    respawn in
                    
                </div>
                
                <div class='count5'>5</div>
                
                <div class='count4'>4</div>
                
                <div class='count3'>3</div>
                
                <div class='count2'>2</div>
                
                <div class='count1'>1</div>
                
                <div class='count0'>0</div>
                
            </div>
            
            <div class='overChatBox'>
                
                <style>
                
                    .overChatBox {
                    
                        background: #101010;
                        height: auto;
                        overflow: auto;
                        border: none;
                        bottom: 50px;
                        background-image: url('../img/cyberia.png'); 
                        background-repeat: no-repeat;
                        /* background-size: cover; */
                        background-size: 40% auto; 
                        /* background-attachment: fixed; */
                        background-position: center; 
                        
                        width: 100%;
                        max-width: <?php echo $ancho."px"; ?>;
                        
                        opacity: 0.9;
                        
                        left: 50%;
                        
                        transform: translate(-50%, 0);
                        
                        
                        position: fixed;
                    
                    }
                
                </style>
                
                <div class='underChatBox'>
                        
                    <style>
                
                        .underChatBox {
                            
                            width: 100%;
                            background: none;
                            min-height: 100%;
                            font-size: 20px;
                            text-shadow: 0px 0px 10px black, 0px 0px 12px black;
                            
                        }
                
                    </style>
                    
               </div>
                
                
            </div>
            
            <style>
                
                    .chatInput {
                        
                        position: fixed;
                        bottom: 8px;
                        height: auto;
                        background: #191919;
                        opacity: 0.8;
                        width: 90%;
                        max-width: <?php echo ($ancho-30)."px"; ?>;
                        transform: translate(-50%, 0);
                        left: 50%;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        padding: 10px;
                        
                    }
                    
                    .credits {
                        
                        position: fixed;
                        bottom: 48px;
                        width: 90%;
                        max-width: <?php echo ($ancho-30)."px"; ?>;
                        transform: translate(-50%, 0);
                        left: 50%;
                        text-align: right;
                        font-size: 10px;
                        color: white;
                        
                    }
                    
                    .credits:hover {
                        
                        color: red;
                        
                    }
                
            </style>
            
            <a href='../'><div class='credits'>Powered By <strong style='font-size: 10px;'>UNDER</strong>post.net</div></a>
            
            <input type='text' class='chatInput' spellcheck='false' autocomplete='new-password' placeholder='CHAT' value='' />
        
        </div>
        
        <iframe src='../space' class='config' style='display: none; width: 100%; height: 100%; border: none;'>
            
        </iframe>
        
        <script type='text/javascript'>
        
            $('.overChatBox').css('height', $('.cover').css('bottom'));
            
            setTimeout( function(){
                
                $('.loading').fadeOut(50);
                
            }, 1700);
                
                
            setTimeout( function(){
                
                $('.main').fadeIn(500);
                
            }, 1700);
        
            
        
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
            
            var arrayClase = new Array();
            
            arrayClase[1]='junko';
            arrayClase[2]='paranoia';
            arrayClase[3]='lain';
            arrayClase[4]='punk';
            arrayClase[5]='kaneki';
            arrayClase[6]='eiri';
            arrayClase[7]='kishins';
            arrayClase[8]='purple';
            arrayClase[9]='agent';
            arrayClase[10]='android';
            arrayClase[11]='coin';
            arrayClase[12]='life';
            arrayClase[13]='power';
            arrayClase[14]='random';
        
            //functions
            
            function random(min, max) {
    
                return Math.floor(Math.random() * (max - min + 1) ) + min;
                
            }
            
            function socket(fid, fchannel, fevent, fdisplay, fclase, fname, fx, fy, fdamage, flife, ftargeteando, flifefull, fporlife, fmap){
                            
                $.ajax({
                        
                    url : 'server.php',
                    dataType : 'JSON',
                    method : 'POST',
                    data : {
                        
                        id: (''+fid),
                        display: (''+fdisplay),
                        clase: (''+fclase),
                        name: (''+fname),
                        x: (''+fx),
                        y: (''+fy),
                        damage: (''+fdamage),
                        life: (''+flife),
                        targeteando: (''+ftargeteando),
                        lifefull: (''+flifefull),
                        porlife: (''+fporlife),
                        map: (''+fmap),
                        
                        event: (''+fevent),
                        channel: (''+fchannel)
                        
                    }
                            
                })
                
            }
            
            function getDMG(fchannel, fevent, from, to){
                
                $.ajax({
                        
                    url : 'server.php',
                    dataType : 'JSON',
                    method : 'POST',
                    data : {
                        
                        from: (''+from),
                        to: (''+to),
                        
                        event: (''+fevent),
                        channel: (''+fchannel)
                        
                    }
                            
                })
                
                
            }
            
            function newObject(fid, fchannel, fevent, fdisplay, fclase, fname, fx, fy, fdamage, flife, ftargeteando, flifefull, fporlife, fmap){
                
                $('.map').append('<div class="'+fid+'" id="userContent" data-channel="'+fchannel+'" data-event="'+fevent+'" data-clase="'+fclase+'" data-name="'+fname+'" data-x="'+fx+'" data-y="'+fy+'" data-damage="'+fdamage+'" data-life="'+flife+'" data-lifefull="'+flifefull+'" data-porlife="'+fporlife+'" data-targeteando="'+ftargeteando+'" data-map="'+fmap+'" style="display: '+fdisplay+';"></div>');
                
                $('.'+fid).load('metaObject.php?id='+fid);
                
                if(fmap=='PVE' && parseInt(fid)>botVolume){
                    
                    $('.'+fid).css('display', 'none');
                    
                }
                
                if(fid>botVolume){
                    
                    users.push((''+fid));
                    
                }
                
            }
            
            //user control
            
            $(document).on('click', '.map', function(e){
                
                var posX = $(this).offset().left;
                var posY = $(this).offset().top;
                
                x=(((e.pageX - posX)*100)/$(".map").width());
                y=(((e.pageY - posY)*100)/$(".map").height());
                
                if(x<5){
                    x=10;
                }
                if(x>90){
                    x=90;
                }
                if(y<10){
                    y=10;
                }
                if(y>90){
                    y=90;
                }
                
                translate<?php  echo $mysqli->insert_id; ?>(x, y, 5000, 'block');
                
                if(map=='PVP'){
                    
                    socket(id, channel, event, 'block', clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
                    
                }
                
            });
            
            $(document).keypress(function(e) {
        
                e.preventDefault;
                var key = e.which;
                
                //if(key == ''){}
                
            });
        
            //pusher
            
            Pusher.logToConsole = false;
        
            var pusher = new Pusher('774521531d43f8610e9d', {
              cluster: 'us2',
              forceTLS: true
            });
        
            var channel = pusher.subscribe('index');
            
            channel.bind('translate', function(data) {
                
                if(data.id!=id){
                    
                    if($('.'+data.id).length){
                    
                        $('.script'+data.id).html('<script>translate'+data.id+'('+data.x+','+data.y+', 5000, "'+data.display+'");');
                    
                    }else{
                    
                        newObject(data.id, data.channel, data.event, data.display, data.clase, data.name, data.x, data.y, data.damage, data.life, data.targeteando, data.lifefull, data.porlife, data.map);
                        
                        socket(id, channel, event, $('.'+id).css('display'), clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
                        
                    }
                    
                }
                
            });
            
            channel.bind('getDMG', function(data) {
                
                if(data.from!=id){
                    
                    $('.script'+data.from).html('<script>updateDMG'+data.to+'('+data.from+','+data.to+');');
                    
                }
                
            });
            
            
            channel.bind('msgChat-event', function(data) {
                
                if(data.user!=id && data.message!=''){
                    
                    $('.underChatBox').append('<strong>'+data.nick+':&nbsp;&nbsp;&nbsp;&nbsp;</strong>'+data.message+'<br>');
                        
                    $('.overChatBox').scrollTop($('.underChatBox').height());
                    
                }
              
            });
            
            
            $(document).keypress(function(e) {
        
                e.preventDefault;
                var key = e.which;
                
                if(key == 13 && $('.chatInput').val()!=''){
                    
                    $.ajax({
                        
                        url : 'serverChat.php',
                        dataType : 'JSON',
                        method : 'POST',
                        data : {
                            message : $('.chatInput').val(),
                            user : (''+id),
                            event : 'msgChat-event',
                            nick: name,
                            channel : 'index'
                        }
                        
                    })
                    
                    $('.underChatBox').append('<strong>'+name+':&nbsp;&nbsp;&nbsp;&nbsp;</strong>'+$('.chatInput').val()+'<br>');
                        
                    $('.overChatBox').scrollTop($('.underChatBox').height());
                    
                    $('.chatInput').val('');
                    
                    $('.chatInput').focus();
                    
                    
                }else{
                    
                    $('.chatInput').focus();
                    
                }
                        
            });
            
            
            $(document).on('click', '.overChatBox', function(){
                
                $('.chatInput').focus();
                
            });
            
            //user variable
            
            <?php  echo 'var id='.$mysqli->insert_id.';'; ?>
            
            <?php
            
                if(isset($_GET['name'])){
                    
                    $name=$_GET['name'];
                    
                }else{
                    
                    $name="Anon#".$mysqli->insert_id;
                    
                }
                
                if(isset($_GET['class'])){
                    
                    $class=$_GET['class'];
                    
                }else{
                    
                    $class="android";
                    
                }
            
            ?>
            
            var clase = <?php echo "'".$class."'"; ?>;
            var name = <?php echo "'".$name."'"; ?>;
            
            var channel = 'index';
            var event = 'translate';
            
            var x = random(10, 90);
            var y = random(10, 90);
            
            var damage = 20;
            var targeteando = false;
            var map = 'PVE';
            
            //100 % -> full
            //porlife % -> life 
            
            var lifefull = <?php $full=100; echo $full;?>;
            var life = <?php $life=100; echo $life;?>;
            var porlife= <?php echo ($life*100/$full);?>;
            
            //start
            
            newObject(id, channel, event, 'block', clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
            
            socket(id, channel, event, $('.'+id).css('display'), clase, name, x, y, damage, life, targeteando, lifefull, porlife, map);
            
            //load bots
            
            var botVolume = 6;
            
            for(var i=1;i<=botVolume;i++){
                
                newObject(i, null, null, 'block', arrayClase[random(1, 9)], 'BOT', random(10, 90), random(10, 90), 20, 120, false, 120, 100, 'PVE');
                
            }
            
            function translateBOT() {
                                
                setInterval(function(){
                    
                    for(var i=1;i<=botVolume;i++){
                        
                        var botx=parseFloat($('.'+i).attr('data-x'))+random(-8, 8);
                        
                        var boty=parseFloat($('.'+i).attr('data-y'))+random(-8, 8);
                        
                        if(botx<10){
                            botx=10;
                        }
                        
                        if(botx>90){
                            botx=90;
                        }
                        
                        if(boty<10){
                            boty=10;
                        }
                        
                        if(boty>90){
                            boty=90;
                        }
                        
                        $('.script'+i).html('<script>setTimeout( function(){ translate'+i+'('+botx+', '+boty+', random(1000, 5000), $(".'+i+'").css("display")); }, random(500, 2000));');
                        
                    }
                    
        
                }, 1000);
                    
            }
            
            translateBOT();
            
            //protect
            
            document.oncontextmenu = function(){ return false; }
           
            document.ondragstart = function(){ return false; }
           
            document.onselectstart = function(){ return false; }
            
            
            
            var opa = parseFloat($('.overChatBox').css('opacity'));
            
            var sube = true;
            
            function backEffect() {
                                
                setInterval(function(){
                    
                    if(opa>=1.0){
                        
                        sube=false;
                        
                    }
                    
                    if(opa<=0.4){
                    
                        sube=true;
                        
                    }
                    
                    if(sube){
                        
                        opa=opa+0.05;
                        
                    }else{
                        
                        opa=opa-0.05;
                        
                    }
                    
                    $('.overChatBox').css('opacity', (''+opa));
                    
                }, 100);
                
            }
            
            //backEffect();
            
        </script>
        
        
    </body>
    
    
</html>
    
    