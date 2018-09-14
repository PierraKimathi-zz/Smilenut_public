
   <?php require_once("../resource/config.php");?>

   
    <?php include(TEMPLATE_FRONT . DS ."headers.php");?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Smilenut shop!</h1>
            
            
        </header>

        <hr>

        <!-- Title -->
        
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        

          <?php get_product_from_shop_page();?>

           
            

        </div>
        <!-- /.row -->

        

        <!-- Footer -->
      

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <?php include(TEMPLATE_FRONT . DS ."footer.php");?>