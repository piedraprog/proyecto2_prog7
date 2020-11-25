<?php

include '../conect.php';


$seller_id = $_POST['sellerid'];
$prod_id = $_POST['prodid'];

// echo "sller id: ".$seller_id;
// echo " prod id: ".$prod_id;

$query = "SELECT * FROM pro.tbl_products
 WHERE pk_product = '$prod_id' AND fk_seller = '$seller_id';";

$result = pg_query($con,$query);

if($result){

    $num_row = pg_num_rows($result);

    if($num_row == "1"){

        echo "1";

    }else{
        
        echo "2";

    }

}





?>