function random(min, max) {
    
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    
}

function socket(fid, fchannel, fevent, fdisplay, fclase, fx, fy){
                
    $.ajax({
            
        url : 'server.php',
        dataType : 'JSON',
        method : 'POST',
        data : {
            
            id: (''+fid),
            display: (''+fdisplay),
            clase: (''+fclase),
            x: (''+fx),
            y: (''+fy),
            
            
            event: (''+fevent),
            channel: (''+fchannel)
            
        }
                
    })
    
}

function newObject(fid, fchannel, fevent, fdisplay, fclase, fx, fy){
    
    $('.map').append('<div class="'+fid+'"></div>');
    
    $('.'+fid).load('metaObject.php?id='+fid);
    
}











