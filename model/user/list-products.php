<?php

include '../conect.php';

$query = "SELECT * FROM pro.tbl_products TL INNER JOIN pro.tbl_users U ON TL.fk_seller = U.pk_user;";
//$query = "SELECT * FROM pro.tbl_products TL INNER JOIN pro.tbl_users U ON TL.fk_seller = U.pk_user;";

$result = pg_query($con,$query);

if($result) {

    $json = array();
   
    while($row =  pg_fetch_array($result)) {

        $json[] = array(

            'prod_id' => $row['pk_product'],
            'prod_name' => $row['product_name'],
            'prod_img' => "data:image/jpeg; base64,".base64_encode(pg_unescape_bytea($row['picture']))."",
            'price' => $row['dolar_price'],
            'quantity' => $row['product_qty'],
            'prod_dscp' => $row['dscp'],
            'id_seller' => $row['fk_seller'],
            'seller_name' => $row['username'],
            'seller_email' => $row['email']
                    
        );
    }

    $jsonstring = json_encode($json);

    echo ($jsonstring);   
}




?>