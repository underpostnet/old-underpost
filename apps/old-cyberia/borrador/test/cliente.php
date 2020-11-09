<!DOCTYPE html>
<head>
    
  <title>Pusher Test</title>
  
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='//code.jquery.com/jquery-1.12.4.js'></script>
  <script src='//code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
  
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('774521531d43f8610e9d', {
      cluster: 'us2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
    
    
    
    $(document).keypress(function(e) {

        e.preventDefault;
        var key = e.which;
        
        if(key == 13){
            
            //$('#php').load('pusherServer.php?m=hola');
            
            $.ajax({
                
                url : "server.php",
                dataType : "JSON",
                method : "POST",
                data : {
                    message : "OK",
                    user : 1
                },
                success : function(response){
                    
                    //si el mensaje fue enviado correctamente
                
                },
                error : function(error){
                    
                    console.error(error);
                    
                }
            })
            
        }
                
                
    });
    
    
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  
  <div id='php'></div>
  
  
</body>