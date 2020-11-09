<?php

$id=$_GET["id"];

$js= "


    <div class='name".$id."' id='name'></div>
    
    <img class='skin".$id."' id='skin'>
    
    <div class='lifefull".$id."' id='lifefull'>
    
        <div class='life".$id."' id='life'></div>
    
    </div>
    
    <!-- script -->
    
    <div class='script".$id."' style='display: none;'></div>
    
    <script>
    
        //load assets
        
        $('.name".$id."').append($('.".$id."').attr('data-name'));
        
        $('.skin".$id."').attr('src', '../img/clases/'+$('.".$id."').attr('data-clase')+'/08.gif')
        
        $('.".$id."').css('left', ($('.".$id."').attr('data-x')+'%'));
        $('.".$id."').css('top', ($('.".$id."').attr('data-y')+'%'));
        $('.life".$id."').css('width', ($('.".$id."').attr('data-porlife')+'%'));
        
        $('.map').append('<div class=power".$id." id=power></div>');
        
        if(".$id."==id){
    
            $('.".$id."').append('<img class=greenArrow src=../img/greenArrow.gif>')
        
        }
        
        //function translate
        
        function translate".$id."(x, y, vel, display){
        
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
            
            if(!(map=='PVE' && ".$id.">botVolume && ".$id."!=id)){
            
                $('.".$id."').css('display', (''+display));
                
            }
            
            $('.".$id."').stop();
            
            var z = 100+Math.round(y);
            
            $('.".$id."').css('z-index', (''+z));
    
            $('.".$id."').animate({left: (x+'%'), top: (y+'%')}, vel, 'swing', function() {
            
                $('.skin".$id."').attr('src', ('../img/clases/'+clase+'/'+estadoFinal".$id."+'.gif'));
                
            });
            
            
        }
        
        //function active
        
        var delete".$id."=0;
        
        function active".$id."() {
                                
            setInterval(function(){
                
                if(delete".$id."==60){
                    
                    $('.".$id."').css('display', 'none');
                    
                    
                }else if(delete".$id."<60){
                
                    delete".$id."++;
                    
                }
                
    
            }, 1000);
                
        }
        
        active".$id."();
        
        //function DMG
        
        $(document).on('click', '.".$id."', function(e){
        
            if(".$id."!=id && !targeteando){
            
                if(".$id.">botVolume){
                    
                    getDMG('index', 'getDMG', id, '".$id."');
                    
                }
                
                updateDMG".$id."(id, '".$id."');
                
            }
            
        });
        
        function updateDMG".$id."(from, to){
        
            //calculos
        
            var newLife = parseFloat($('.'+to).attr('data-life')) - parseInt($('.'+from).attr('data-damage'));
            
            var fullLife = parseFloat($('.'+to).attr('data-lifefull'));
            
            $('.'+to).attr('data-life', (''+newLife));
            
            
            //fullLife -> 100%
            //newLife -> lifeX%
            
            var lifeX = ((100*newLife)/fullLife);
        
            $('.'+to).attr('data-life', (''+newLife));
            $('.'+to).attr('data-porlife', (''+lifeX));
            $('.life'+to).css('width', (''+lifeX+'%'));
            
            if(".$id."==id){
            
                porlife = lifeX;
                life = newLife;
                
            }
            
            
            //animacion
            
            $('.power'+from).css('left', $('.'+from).css('left'));
            $('.power'+from).css('top', $('.'+from).css('top'));
            $('.power'+from).css('display', 'block');
            
            if( (''+from)==(''+id) ){
            
                targeteando=true;
                
            }
            
            $('.'+from).attr('data-targeteando', 'true');
            
            $('.power'+from).animate({left: $('.'+to).css('left'), top: $('.'+to).css('top')}, 350, 'swing', function() {
            
                $('.power'+from).css('display', 'none');
                
                $('.'+from).attr('data-targeteando', 'false');
                
                if( (''+from)==(''+id) ){
            
                    targeteando=false;
                    
                }
                
            });
        
            //alert('de: '+from+' para: '+to);
            
            if(newLife<=0){
            
                $('.script'+to).html('<script>updateRMV'+to+'();');
                
            }
            
        }
        
        //function RMV
        
        function updateRMV".$id."(){
        
            $('.".$id."').css('display', 'none');
            
            $('.life".$id."').css('width', '100%');
                
            $('.".$id."').attr('data-life', $('.".$id."').attr('data-lifefull'));
            
            $('.".$id."').attr('data-porlife', '100');
            
            $('.".$id."').attr('data-targeteando', 'false');
            
            if(".$id."==id){
            
                life=lifefull;
                porlife=100;
                targeteando=false;
                
                $('.death').fadeIn(500).delay(5000).fadeOut(500);
                
                $('.count5').fadeIn(10).delay(980).fadeOut(10);
                
                $('.count4').delay(1000).fadeIn(10).delay(980).fadeOut(10);
                
                $('.count3').delay(2000).fadeIn(10).delay(980).fadeOut(10);
                
                $('.count2').delay(3000).fadeIn(10).delay(980).fadeOut(10);
                
                $('.count1').delay(4000).fadeIn(10).delay(980).fadeOut(10);
                
                $('.count0').delay(5000).fadeIn(10).delay(980).fadeOut(10);
                
                $('.".$id."').delay(5500).fadeIn(500);
                    
            }
            
            if(".$id."<=botVolume){
            
                $('.".$id."').attr('data-clase', arrayClase[random(1, 9)]);
            
                $('.".$id."').attr('data-x', (''+random(10, 90)));
                
                $('.".$id."').attr('data-y', (''+random(10, 90)));
                
                setTimeout( function(){ $('.".$id."').css('display', 'block'); }, 5000);
                
            }
            
        }
        
    
    </script>
    

";

echo $js;

?>