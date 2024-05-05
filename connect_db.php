<?php

$connect = pg_connect("host=localhost dbname=xrpl3 user=postgres password=chilyasalsabila2008");

if (!$connect) {
    echo 'Connection attempt failed.';
}

$server = $_SERVER['SERVER_NAME'];
$port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
$base_url = "http://".$server.$port;

?>