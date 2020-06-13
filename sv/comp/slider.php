<style>

slider {

  display: block;
  position: absolute;
  padding: 0;
  margin: 0;

  overflow: hidden;

}

.img-arrow {

  filter: invert(100%);
  width: 50px;
  cursor: pointer;
  opacity: 0.8;
  transition: .10s;
  z-index: 999;

}

.img-arrow:hover {

  width: 55px;
  height: 55px;

}

.img-arrow:hover {

  opacity: 1;

}

.a1 {

  position: absolute;
  transform: translate(0, -50%);
  top: 50%;
  left: 2%;

}

.a2 {

  position: absolute;
  transform: translate(0, -50%);
  top: 50%;
  right: 2%;

}

.img-slider {

  width: 80%;
  cursor: pointer;

}

</style>

<slider>

  <img class='img-arrow a1' src='/assets/arrow4.png'>

  <img class='img-arrow a2' src='/assets/arrow6.png'>

  <a alt='cyberia online' target='_blank' href='https://www.cyberiaonline.com/'>

    <img class='img-slider center s1' style='width: 140%; height: auto;' src='/assets/slider/cyberia.gif'>

  </a>

  <a alt='cyberia online' target='_blank' href='https://www.cyberiaonline.com/'>

    <img class='img-slider center s1'  style='width: 60%;' src='/assets/slider/cyberia-logo.png'>

  </a>

  <a alt='nexodev.org' target='_blank' href='https://www.nexodev.org/'>

    <img class='img-slider center s2' style='display: none; width: 140%; height: auto;  opacity: 0.7;' src='/assets/slider/nexodev-fondo.gif'>

  </a>

  <a alt='nexodev.org' target='_blank' href='https://www.nexodev.org/'>

    <img class='img-slider center s2'  style='display: none; width: 100%;' src='/assets/slider/nexodev_logo.png'>

  </a>

  <a alt='ywork nodejs framework' target='_blank' href='https://github.com/underpostnet/ywork'>

    <img class='img-slider center s3' style='display: none; width: 140%; height: auto;' src='/assets/slider/blood2.gif'>

  </a>

  <a alt='ywork nodejs framework' target='_blank' href='https://github.com/underpostnet/ywork'>

    <img class='img-slider center s3'  style='display: none; width: 80%;' src='/assets/slider/ywork.PNG'>

  </a>

</slider>

<script type='text/javascript'>

(function(){

  var actual = 1;

  var stop = false;

  setInterval(function(e){

    if(!stop){

      $('.s'+actual).fadeOut(500);

      actual++;

      if(actual>3){

        actual = 1;

      }

      $('.s'+actual).delay(500).fadeIn(500);

    }

  }, 2500);


  $('.a1').click(function() {

    stop = true;

    $('.s'+actual).fadeOut(500);

    actual--;

    if(actual < 1){

      actual = 3;

    }

    $('.s'+actual).delay(500).fadeIn(500);


  });

  $('.a2').click(function() {

    stop = true;

    $('.s'+actual).fadeOut(500);

    actual++;

    if(actual > 3){

      actual = 1;

    }

    $('.s'+actual).delay(500).fadeIn(500);

  });

}());

</script>
