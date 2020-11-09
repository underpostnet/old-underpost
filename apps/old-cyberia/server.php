<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'us2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '774521531d43f8610e9d',
    'f173d939a5a38e32b139',
    '873383',
    $options
  );
  
  $data['channel'] = $_REQUEST['channel'];
  $data['event'] = $_REQUEST['event'];
  
   
   
  $data['id'] = $_REQUEST['id'];
  $data['display'] = $_REQUEST['display'];
  $data['clase'] = $_REQUEST['clase'];
  $data['name'] = $_REQUEST['name'];
  $data['x'] = $_REQUEST['x'];
  $data['y'] = $_REQUEST['y'];
  $data['damage'] = $_REQUEST['damage'];
  $data['life'] = $_REQUEST['life'];
  $data['targeteando'] = $_REQUEST['targeteando'];
  $data['from'] = $_REQUEST['from'];
  $data['to'] = $_REQUEST['to'];
  $data['lifefull'] = $_REQUEST['lifefull'];
  $data['porlife'] = $_REQUEST['porlife'];
  $data['map'] = $_REQUEST['map'];
  
  
  $pusher->trigger($data['channel'], $data['event'], $data);
  
?>