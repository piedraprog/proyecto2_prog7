<?php

$user = "postgres";
$pass = "1234";
$host ="localhost";
$db = "PROVII";

//$con = null;

$con = pg_connect("host='$host' dbname='$db' user='$user' password='$pass' ") or die("error");





?>