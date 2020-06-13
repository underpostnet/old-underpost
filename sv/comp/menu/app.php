<style>

app {

  position: relative;
  display: block;
  height: auto;
  background: black;
  color: white;
  padding: 10px;
  margin: 10px;
  cursor: pointer;

}

app:hover {

  color: red;

}

.title-app {

  font-weight: bold;

}

.img-embed {

  position: relative;
  filter: invert(100%);
  width: 35px;
  top: -30px;
  float: right;
  transition: .10s;
  opacity: 0.8;

}

.img-embed:hover {

  width: 38px;
  opacity: 1;

}

</style>

<?php

function addApp($name, $link, $tag)
{

  echo '<app itemscope itemtype="https://schema.org/WebApplication">';

  echo '<h2>'.$name.'</h2>';

  echo '<div class="'.$tag.' title-app">'.$name.'</div>';

  echo '<div class="'.$tag.'" style="padding-bottom: 10px;" >'.$link.'</div>';

  echo '

  <div>

  <div

  class="a2a_kit a2a_kit_size_32 a2a_default_style"
  data-a2a-url="https://'.$link.'/"
  data-a2a-title="'.$name.'"

  >

  <a class="a2a_button_copy_link"></a>

  <a class="a2a_button_twitter"></a>

  <a class="a2a_button_facebook"></a>

  <a class="a2a_button_reddit"></a>

  <a class="a2a_button_whatsapp"></a>


  </div>

  </div>

  ';

  echo '<a href="/embed.php?url=https://'.$link.'"><img class="img-embed" src="/assets/embed.png"></a>';

  echo '

  <script>

  $(".'.$tag.'").click(function() {

    location.href =  "https://'.$link.'/";

  });

  </script>

  ';

  echo '</app>';

}

?>
