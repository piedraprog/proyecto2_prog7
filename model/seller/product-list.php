<?php

include '../conect.php';

$seller_id = $_POST['id'];

// echo $seller_id;

$sql ="SELECT *  FROM pro.tbl_products
WHERE fk_seller = '$seller_id';";


$result = pg_query($con,$sql);

if($result) {

    $json = array();

    while($row = pg_fetch_array($result)) {

        $json[] = array(

            'prod_id' => $row['pk_product'],
            'prod_name' => $row['product_name'],
            'prod_img' => "<img style='height:100px; width:100px;' src='data:image/jpeg; base64,".base64_encode(pg_unescape_bytea($row['picture']))."'>",
            'price' => $row['dolar_price'],
            'quantity' => $row['product_qty']
            
                    
        );
    }

    $jsonstring = json_encode($json);

    echo ($jsonstring);   
}

?>