<?php
require '../util.php';
$config = (require '../../config.php');

$_url = $config['api'] . '/getinfo';
$arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  
$response = json_decode(file_get_contents($_url, false, stream_context_create($arrContextOptions)), true);

print_r($response['outgoing_connections_count']);
