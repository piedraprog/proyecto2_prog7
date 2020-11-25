<?php

include '../conect.php';

$id= $_POST['prod_id'];    
$name= $_POST['prod_name'];  
$file = $_FILES['file']['tmp_name'];      
$type= $_POST['prod_type'];  
$price= $_POST['prod_price']; 
$quantity= $_POST['prod_qtt'];      
$id_seller = $_POST['seller_id'];
$dsc= $_POST['prod_desc'];  


// TRATAMIENTO DE LA IMAGEN
$fp = fopen($file, 'r+b');
$data = fread($fp, filesize($file));
//escapar los caracteres 
// LA VARIABLE DATA ES LA QUE SE INSERTA EN LA DB
$data = pg_escape_bytea($data);
fclose($fp);


$query = "INSERT INTO pro.tbl_products(
	pk_product, product_name, picture, fk_producttype, dolar_price, product_qty, fk_seller, dscp)
	VALUES ('$id', '$name', '$data', '$type', '$price', '$quantity', '$id_seller', '$dsc');";

if(pg_query($con,$query)){

    echo "1";

}else{
    echo "2";

}



?>