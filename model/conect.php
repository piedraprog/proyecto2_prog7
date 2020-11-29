<?php


$username = "doadmin";
$password = "zccyp38gwd3vxx64";
$host = "db-postgresql-prueba-do-user-8375108-0.b.db.ondigitalocean.com";
$port = "25060";
$database = "defaultdb";
$sslmode = "require";

//$con = null;

$con = pg_connect("host='$host' dbname='$database' user='$username' port='$port' password='$password' sslmode='$sslmode'") or die("error");





?>