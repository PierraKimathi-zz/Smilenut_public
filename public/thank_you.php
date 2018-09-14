<?php require_once("../resource/config.php");?>

<?php include(TEMPLATE_FRONT . DS . "headers.php");?>
    

<?php
if(isset($_GET['tx'])){
    
$amount=$_GET['amt'];
$currency=$_GET['cc'];
$transaction=$_GET['tx'];    
$status=$_GET['st'];
    

$query=query("INSERT INTO orders(amount,transaction,status,currency) VALUES('{$amount}','{$currency}','{$transaction}','{$status}')");    
    
confirm($query);
session_destroy();
    
    
}else{
    
 redirect("index.php");   
    
    
    
}




?>

   
     <!-- Page Content -->
     
    <div class="container">

        <h1 class="text-center">THANK YOU</h1>

    </div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS ."footer.php");?>