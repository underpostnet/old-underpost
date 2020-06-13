<script type='text/javascript'>

(function(){function responsive(){setInterval(function(e){

  setTimeout(function(e){

    $('loading').fadeOut(300);

  }, 500);

  var bw = f('body', 'width');
  var bh = f('body', 'height');

  $('logo').css('background', 'none');
  $('menu').css('background', '#b90000');
  $('slider').css('background', 'none');
  $('footer').css('background', '#1a1a1a');

  if(bw>567){

    if(estado!='A'){

      estado = 'A';

      $('logo').css('width', '50%');
      $('logo').css('height', '30%');
      $('logo').css('top', '0%');
      $('logo').css('left', '0%');

      $('slider').css('width', '50%');
      $('slider').css('height', '85%');
      $('slider').css('top', '0%');
      $('slider').css('left', '50%');

      $('menu').css('width', '50%');
      $('menu').css('height', '55%');
      $('menu').css('top', '30%');
      $('menu').css('left', '0%');

      $('footer').css('width', '100%');
      $('footer').css('height', '15%');
      $('footer').css('top', '85%');
      $('footer').css('left', '0%');

    }

  }else{

    if(estado!='B'){

      estado = 'B';

      $('logo').css('width', '100%');
      $('logo').css('height', '10%');
      $('logo').css('top', '0%');
      $('logo').css('left', '0%');

      $('slider').css('width', '100%');
      $('slider').css('height', '30%');
      $('slider').css('top', '10%');
      $('slider').css('left', '0%');

      $('menu').css('width', '100%');
      $('menu').css('height', '50%');
      $('menu').css('top', '40%');
      $('menu').css('left', '0%');

      $('footer').css('width', '100%');
      $('footer').css('height', '10%');
      $('footer').css('top', '90%');
      $('footer').css('left', '0%');

    }

  }

}, 150);}responsive();}());

</script>
