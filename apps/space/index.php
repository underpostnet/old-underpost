<!DOCTYPE html>
<html>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
        <!-- meta -->
         
        
        <meta http-equiv='expires' content='0'>
 
        <meta http-equiv='Cache-Control' content='no-cache'>
 
        <meta http-equiv='Pragma' content='no-cache'>
        
        <meta name='description' content='Multiplayer Real Time Virtual World'>
        
        <meta name='keywords' content='Multiplayer Real Time Virtual World'/>
        
        <meta name='author' content='Francisco, fcoverdugoa@gmail.com'>
        
        <meta name='reply-to' content='fcoverdugoa@gmail.com'>
        
        <meta name='url' content='https://underpost.net/space/index.php'>
        
        <meta name='identifier-URL' content='https://www.underpost.net/space/index.php'>
        
        <meta name='distribution' content='Global'>
        
        <meta name='language' content='EN'>
        
        <meta name='copyright'content='underpost.net'>
        
        <!-- Meta Social -->
        
        <meta name='twitter:card' value='summary'>

        <meta property='og:title' content='Multiplayer Real Time Virtual World - UNDERpost.net' />

        <meta property='og:url' content='https://underpost.net/space/index.php' />

        <meta property='og:image' content='https://underpost.net/img/logo.PNG' />

        <meta property='og:description' content='Multiplayer Real Time Virtual World' />
        
        <!-- Canonical -->
        
        <link rel='canonical' href='https://underpost.net/space/index.php'>
        
        <!-- favicon -->
        
        <link rel='icon' type='image/png' href='../img/underpost.png' />
        
        <!-- <link rel='alternate' hreflang='es' href='URL'> -->
        
        <!--  android -->
        
        <meta name='viewport' content='initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
        
        <!--  ios -->
        
        <meta name='viewport' content='width=device-width, user-scalable=no' />
        
        <!--  css -->
        
        <link rel=StyleSheet href='index.css' type='text/css' media=all>
        
        <!--  jquery -->
        
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics --> 
        
        <script async src='https://www.googletagmanager.com/gtag/js?id=UA-142681040-1'></script>
        
        <script>
        
          window.dataLayer = window.dataLayer || [];
          
          function gtag(){dataLayer.push(arguments);}
          
          gtag('js', new Date());
        
          gtag('config', 'UA-142681040-1');
          
          gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesi贸n.
          
        </script>
        
        <title>UNDERpost.net</title>
        
        <style>
        
        .configuration {
            
            background: black;
            width: 100%;
            max-width: 800px;
            height: 100%;
            position: absolute;
            transform: translate(-50%, 0%);
            left: 50%;
            text-align: center;
            
        }
        
        .avatar {
            
            position: relative;
            width: 15%;
            height: auto;
            cursor: pointer;
            
        }
        
        .avatarSelect {
            
            position: relative;
            width: 60%;
            height: auto;
            
        }
        
        .select {
            
            margin: auto;
            width: 90%;
            height: 55%;
            background: #111111;
            border-radius: 15px;
            border: 10px solid black;
            
        }
        
        .input {
            
            width: 90%;
            height: 50px;
            text-align: center;
            background: black;
            font-weight: 700;
            border: none;
            color: white;
            font-size: 25px;
            
        }
        
        .go {
            
            width: 40%;
            height: 55px;
            background: white;
            margin: auto;
            cursor: pointer;
            border-radius: 10px;
            
        }
        
       
        
        .go:hover, .avatar:hover {
            
            opacity: 0.75;
            
        }
        
        .center {
            
            
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            position: relative;
            color: black;
            font-weight: 700;
            font-size: 30px;
            
        }
        
        .map {
            
            position: absolute;
            width: 100%;
            height: 105%;
            display: none;
            background: #111111;
                    
        }
                
        </style>

    </head>
    
    <body>
            
        <div style='display: none;'>
            
            
            <h1>Multiplayer Real Time Virtual World</h1>
        
        
        </div>
        
        <div class='configuration'>
            
            <!-- &nbsp; -->
            
            <br>
            
            <input type="text"  class="input" spellcheck="false" autocomplete="new-password" placeholder="NICK" />
            
            <br>
            
            <br>
        
            <img class='avatar' id='0' style='border: 3px solid white; border-radius: 10px;' src='../img/clases/random/08.gif'>
            
            <img class='avatar' id='1' src='../img/clases/lain/08.gif'>
            
            <img class='avatar' id='2' src='../img/clases/punk/08.gif'>
            
            <img class='avatar' id='3' src='../img/clases/junko/08.gif'>
            
            <img class='avatar' id='4' src='../img/clases/kaneki/08.gif'>
            
            <img class='avatar' id='5' src='../img/clases/paranoia/08.gif'>
            
            <br>
            
            <div class='select'>
                
                <div class='center'>
                    
                    <img class='avatarSelect'  src='../img/clases/random/08.gif'>
                    
                </div>
                
            </div>
            
            <br>
            
            <div class='go'>
                
                <div class='center'>GO!</div>
                
            </div>
            
        </div>
        
        
        
        <div class='map'>
            
            
            
        </div>
        
        
        <div class='php' style='display: none;'>
            
            
            
        </div>
        
            
        <script type='text/javascript'>
        
            var select = 0;
            
            $('.input').focus();
        
            var avatar = new Array();
            
            avatar[0]='random';
            avatar[1]='lain';
            avatar[2]='punk';
            avatar[3]='junko';
            avatar[4]='kaneki';
            avatar[5]='paranoia';
            
            function random(min, max) {
                    
                return Math.floor(Math.random() * (max - min + 1) ) + min;
                    
            }
            
            //configuration events
            
            function changeAvatar(n){
                
                var n=n;
                
                $('#'+select).css('border' , 'none');
                
                $('.avatarSelect').css('display', 'none');
                
                if(n==0){
                    
                    $('.avatarSelect').css('width', '50%');
                    
                    var url='../img/clases/random/08.gif'
                    
                }else{
                    
                    
                    $('.avatarSelect').css('width', '50%');
                    
                    var url='../img/clases/'+avatar[n]+'/08.gif';
                    
                }
                
                $('#'+n).css('border', '3px solid white');
                
                $('#'+n).css('border-radius', '10px');
                
                $('.avatarSelect').attr('src', url);
                
                $('.avatarSelect').fadeIn(400);
                
                select = n;
                
            }
            
            $(document).on("click", "#0", function(){
                
                changeAvatar(0);
                
            });
            
            $(document).on("click", "#1", function(){
                
                changeAvatar(1);
                
            });
            
            $(document).on("click", "#2", function(){
                
                changeAvatar(2);
                
            });
            
            $(document).on("click", "#3", function(){
                
                changeAvatar(3);
                
            });
            
            $(document).on("click", "#4", function(){
                
                changeAvatar(4);
                
            });
            
            $(document).on("click", "#5", function(){
                
                changeAvatar(5);
                
            });
            
            $(document).on("click", ".go", function(){
                
                if(select==0){
                    
                    select=random(1,5);
                    
                }
                
                if($('.input').val()==''){
                    
                    window.location='../old-cyberia/index.php?class='+avatar[select];
                    
                }else{
                    
                    window.location='../cyberia/index.php?name='+$('.input').val()+'&class='+avatar[select];
                    
                }
                
            });
            
            
            $(document).keypress(function(e) {
        
                e.preventDefault;
                var key = e.which;
                
                if(key == 13){
                    
                    if(select==0){
                    
                        select=random(1,5);
                        
                    }
                    
                    if($('.input').val()==''){
                        
                        window.location='../cyberia/index.php?class='+avatar[select];
                        
                    }else{
                        
                        window.location='../cyberia/index.php?name='+$('.input').val()+'&class='+avatar[select];
                        
                    }
                    
                }
            
            });
            
            
            document.oncontextmenu = function(){ return false; }
           
            document.ondragstart = function(){ return false; }
           
            document.onselectstart = function(){ return false; }
        
        </script>
        
    </body>
    
</html>
    
    
    
    
    
    