<?php

    // require("../vendor/autoload.php");
    require '../private/stream-con.php';
    // require ('../private/api-keys.php');

    // use Pusher\Pusher;

    // define("APP_ID", "1487708");
    // define("APP_KEY", "0a5157158ca04fc76c2c");
    // define("APP_SECRET", "5f9a844af95adf3907a7");
    // define("APP_CLUSTER", "mt1");

    // $options = array(
    //     'cluster' => APP_CLUSTER,
    //     'useTLS' => true
    // );

    // $pusher = new Pusher\Pusher(APP_KEY, APP_SECRET, APP_ID, $options);

    $data = array(
        1=>'Testing from php ajax pusher',
        2=>true
        );
    // $data['message'] = 'Testing from php ajax pusher';

    $pusher->trigger('realtime-app-pp', 'check_submit', $data);

    echo json_encode($data);


