<?php
require_once("../resource/config.php"); ?>

<?php


if(isset($$_GET['add'])){


$query = query("SELECT * FROM product WHERE product_id=" . escape_string[$_GET['add']);
confirm($query);
while($row = fetch_array($query)){


    if($row)['quantity'] !{


    }
}

    //$_SESSION['product_' . $_GET['add']] +=1;

   // redirect("index.php");
}

?>