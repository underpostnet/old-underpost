<?php

$id=$_GET["id"];

$js= "

    <div id='centerDiv' class='nick".$id."'>Anon#".$id."</div>  
    
    <div class='script".$id."' style='display: none;'></div>
    
    <img class='skin".$id."' id='skin' style='display: none;'>
    
    <script>
    
        $('.skin".$id."').attr('src', ('../img/clases/'+$('.".$id."').attr('data-clase')+'/08.gif'));
        $('.skin".$id."').css('display', 'block');
        $('.nick".$id."').css('top', '-5px');
        $('.nick".$id."').css('font-size', '10px');
        
        var delete".$id."=0;
        
        function translate".$id."(x, y, display){
        
            var oldx = parseFloat($('.".$id."').attr('data-x'));
            var oldy = parseFloat($('.".$id."').attr('data-y'));
            
            $('.".$id."').attr('data-x', (''+x));
            $('.".$id."').attr('data-y', (''+y));
            
            var newx = parseFloat(x);
            var newy = parseFloat(y);
            
            var clase = $('.".$id."').attr('data-clase');
            
            var estadoFinal".$id."='08';
            
            if( Math.abs(newx-oldx)>Math.abs(newy-oldy) ){
                
                
                if(newx<oldx){
                
                    //14
                    
                    $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/14.gif'));
                    
                    estadoFinal".$id."='04';
                
                }
                
                if(newx>oldx){
                    
                    //16
                    
                    $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/16.gif'));
                    
                    estadoFinal".$id."='06';
                    
                }
                
            }else{
                
                if(newy<oldy){
                
                   //12
                   
                   $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/12.gif'));
                   
                    estadoFinal".$id."='02';
                
                }
                
                if(newy>oldy){
                    
                    //18
                    
                    $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/18.gif'));
                    
                    estadoFinal".$id."='08';
                    
                }
                
            }
            
            
            delete".$id."=0;
            
            $('.".$id."').css('display', (''+display));
            
            $('.".$id."').stop();
            
            var z = 100+Math.round(y);
            
            $('.".$id."').css('z-index', (''+z));
    
            $('.".$id."').animate({left: (x+'%'), top: (y+'%')}, 500, 'swing', function() {
            
                $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/'+estadoFinal".$id."+'.gif'));
                
            });
            
        }
        
        function bucleDelete".$id."() {
                                
            setInterval(function(){
                
                if(delete".$id."==60){
                    
                    $('.".$id."').css('display', 'none');
                    
                }else{
                
                    delete".$id."++;
                    
                }
                
    
            }, 1000);
                
        }
        
        bucleDelete".$id."();
        
        if(".$id."==id){
        
            $('.".$id."').append('<img class=greenArrow id=centerDiv src=../img/greenArrow.gif>')
            $('.greenArrow').css('width', '40px');
            $('.greenArrow').css('top', '-15px');
            
        }
    
    </script>
    
    ";
    
echo $js;


?>