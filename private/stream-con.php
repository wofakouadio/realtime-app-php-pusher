<?php

    require ('../vendor/autoload.php');
    require ('../private/api-keys.php');

    $options = array(
        'cluster' => APP_CLUSTER,
        'useTLS' => true
    );

    $pusher = new Pusher\Pusher(
        APP_KEY,
        APP_SECRET,
        APP_ID,
        $options
    );