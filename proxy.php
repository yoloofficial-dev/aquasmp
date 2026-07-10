<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$data = file_get_contents('https://api.npoint.io/076c2b56fddcb94e094d');
echo $data;
?>