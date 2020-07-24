<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
     <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Welcome | E-Store</title>

         <link href="css/bootstrap.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>


   </head>
    <body   style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?>
        



 <br>
    <br>

    <div class="container-fluid">

              
                       
              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 1</h3>
                        </div>
                                <img src="./img/i2.png" alt="iphone 2" >
                                    <div class="caption">
                                        <p>iPhone 6 plus , 
                                        Price: Rs. 40000.00 </p>
                                            <p><a href="products.php#iphone" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>




                         <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 2</h3>
                        </div>
                                <img src="./img/s3.png" alt="samsung 3" >
                                    <div class="caption">
                                        <p>Samsung galaxy s7 ,
                                        Price: Rs. 45000.00 </p>
                                            <p><a href="products.php#samsung" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>




                         <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 3</h3>
                        </div>
                                <img src="./img/o2.png" alt="one plus 2" >
                                    <div class="caption">
                                        <p>One Plus 5 ,
                                        Price: Rs. 34000.00 </p>
                                            <p><a href="products.php#oneplus" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>



                         <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 4</h3>
                        </div>
                                <img src="./img/m1.png" alt="Xiaomi 1" >
                                    <div class="caption">
                                        <p>Mi A1 ,
                                        Price: Rs. 15000.00 </p>
                                            <p><a href="products.php#xiaomi" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>



                         <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 5</h3>
                        </div>
                                <img src="./img/s1.png" alt="   Samsung 1" >
                                    <div class="caption">
                                        <p>Samsung 8 ,
                                        Price: Rs. 65000.00 </p>
                                            <p><a href="products.php#samsung" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>




                         <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">Mobile 6</h3>
                        </div>
                                <img src="./img/o3.png" alt="one plus 3" >
                                    <div class="caption">
                                        <p>One Plus 3 ,
                                        Price: Rs. 28000.00 </p>
                                            <p><a href="products.php#oneplus" role="button" class="btn btn-primary btn-block">Order Now</a></p>    
                                    </div>
                            </div>
                        </div>
                        

                         </div>
            
            

   <?php include 'includes/footer.php'; ?>
</body>
</html>
                         




