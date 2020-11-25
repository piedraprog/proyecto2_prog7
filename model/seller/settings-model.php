<?php

include '../conect.php';


$id = $_POST['id_seller'];
$user = $_POST['user'];
$email = $_POST['email'];
$Propic = $_FILES['file']['tmp_name'];

// echo $Propic;


// TRATAMIENTO DE LA IMAGEN
$fp = fopen($Propic, 'r+b');
$data = fread($fp, filesize($Propic));
// ESCAPE THE VARIABLE 
// LA VARIABLE DATA ES LA QUE SE INSERTA EN LA DB
$data = pg_escape_bytea($data);
fclose($fp);

$query="UPDATE pro.tbl_users
	SET username='$user', email='$email', profile_photo='$data'
    WHERE pk_user='$id';";
    



if(pg_query($con,$query)){

    
    echo 1;

    
}else{
    echo 2;
}


?>


