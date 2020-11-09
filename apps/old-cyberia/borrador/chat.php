
<!DOCTYPE html>

<?php
                
    require('connect.php');

    $sql = $mysqli->query('INSERT INTO `cyberia` (`id`) VALUES (NULL);');
                
?>

<html lang='es'>
    
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
        
        <div style='display: none;'><h1>CYBERIA MUNDO VIRTUAL</h1></div>
        
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
        
            <div class='overChatBox'>
                
                <style>
                
                    .overChatBox {
                        
                        
                        background: #101010;
                        height: 80%;
                        overflow: auto;
                        border: 0px solid gray;
                        top: 50px;
                        background-image: url('../img/cyberia.png'); 
                        background-repeat: no-repeat;
                        /* background-size: cover; */
                        background-size: 70% auto; 
                        /* background-attachment: fixed; */
                        background-position: center; 
                        
                        width: 100%;
                        
                        position: fixed;
                        
                    }
                
                </style>
                
                <div class='underChatBox'>
                    
                    <style>
                
                        .underChatBox {
                            
                            width: 100%;
                            background: black;
                            opacity: 0.8;
                            min-height: 100%;
                            font-size: 20px;
                            
                        }
                
                    </style>
                    
               </div>
               
            
            </div>
            
            
            <style>
            
                .chatInput {
                    
                    width: 96%;
                    height: 20px;
                    border: none;
                    padding: 2%;
                    font-size: 20px;
                    background: #101010;
                    color: white;
                    cursor: pointer;
                    position: fixed;
                    
                }
            
            </style>
            
            <input 
            
            type='text' 
            class='chatInput' 
            spellcheck='false' 
            autocomplete='new-password' 
            
            placeholder=
            
            ' <?php echo 'welcome User#'.$mysqli->insert_id.' Chat Here...'; ?>' 
            value='' 
            
            />
            
        </div>
        
        <script type='text/javascript'>
        
            $('.chatInput').focus();
        
            <?php  echo 'var id='.$mysqli->insert_id.';'; ?>
            
            // Enable pusher logging - don't include this in production
            
            Pusher.logToConsole = true;
        
            var pusher = new Pusher('774521531d43f8610e9d', {
              cluster: 'us2',
              forceTLS: true
            });
        
            var channel = pusher.subscribe('zone1-channel');
            
            channel.bind('msgChat-event', function(data) {
                
                if(data.user!=id && data.message!=''){
                    
                    $('.underChatBox').append('<strong>User#'+data.user+':&nbsp;&nbsp;&nbsp;&nbsp;</strong>'+data.message+'<br>');
                        
                    $('.overChatBox').scrollTop($('.underChatBox').height());
                    
                }
              
            });
            
            
            
            $('.chatInput').keypress(function(e) {
        
                e.preventDefault;
                var key = e.which;
                
                if(key == 13 && $('.chatInput').val()!=''){
                    
                    $.ajax({
                        
                        url : 'server.php',
                        dataType : 'JSON',
                        method : 'POST',
                        data : {
                            message : $('.chatInput').val(),
                            user : (''+id),
                            event : 'msgChat-event',
                            channel : 'zone1-channel'
                        }
                        
                    })
                    
                    $('.underChatBox').append('<strong>User#'+id+':&nbsp;&nbsp;&nbsp;&nbsp;</strong>'+$('.chatInput').val()+'<br>');
                        
                    $('.overChatBox').scrollTop($('.underChatBox').height());
                    
                    $('.chatInput').val('');
                    
                    $('.chatInput').focus();
                    
                }
                        
            });
            
            
            $(document).on('click', '.overChatBox', function(){
                
                $('.chatInput').focus();
                
            });
            
            //document.oncontextmenu = function(){ return false; }
           
            //document.ondragstart = function(){ return false; }
           
            //document.onselectstart = function(){ return false; }
        
        </script>
        
        
    </body>
    
    
</html>
    
    