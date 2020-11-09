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

  //$data['message'] = $_GET['m'];
  
  $data['message'] = $_REQUEST['message'];
  $data['user'] = $_REQUEST['user'];
  
  $pusher->trigger('my-channel', 'my-event', $data);
?>