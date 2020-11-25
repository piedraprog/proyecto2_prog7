<?php

include '../conect.php';


// echo "tipos de productos";

$sql = "SELECT *
            FROM pro.tbl_productypes;";



$result = pg_query($con, $sql);

if($result) {

    $json = array();

    while($row = pg_fetch_array($result)) {

        $json[] = array(

            'id_type' => $row['pk_producttype'],
            'type' => $row['product_type']
            
                    
        );
    }

    $jsonstring = json_encode($json);

    echo ($jsonstring);   
}

?>