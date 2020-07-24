<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Products | E-Store</title>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</head>


<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>

    <div class="container-fluid">

        <div class="row text-center" id="iphone">

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div  class="panel-heading  color" style="background-color: #f5f5f5">
                                
                            <h3  style="color:black" >#1</h3>
                        
                        </div>
                                <img src="./img/i1.png" alt="iphone 7" >
                                    <div class="caption">
                                        <p>iPhone 7
                                        , Price: Rs. 60000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        


                        
              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#2</h3>
                        </div>
                                <img src="./img/i2.png" alt="iphone 6 plus" >
                                    <div class="caption">
                                        <p>iPhone 6 plus ,
                                        Price: Rs. 40000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                       



                        

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#3</h3>
                        </div>
                                <img src="./img/i3.png" alt="iphone 7 plus" >
                                    <div class="caption">
                                        <p>iPhone 7 plus ,
                                        Price: Rs. 69000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>


                    </div>
                       



                         <div class="row text-center" id="oneplus">

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#4</h3>
                        </div>
                                <img src="./img/o1.png" alt="one plus 1" >
                                    <div class="caption">
                                        <p>One plus 5T ,
                                        Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        




                        
              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#5</h3>
                        </div>
                                <img src="./img/o2.png" alt="one plus 2" >
                                    <div class="caption">
                                        <p>One plus 5 ,
                                        Price: Rs. 34000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        


                       
              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#6</h3>
                        </div>
                                <img src="./img/o3.png" alt="one plus 3" >
                                    <div class="caption">
                                        <p>One Plus 3 ,
                                        Price: Rs. 28000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        


</div>


                      <div class="row text-center" id="samsung">  

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#7</h3>
                        </div>
                                <img src="./img/s1.png" alt="samsung 1" >
                                    <div class="caption">
                                        <p>Samsung 8
                                        , Price: Rs. 65000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                    </div>



                        

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#8</h3>
                        </div>
                                <img src="./img/s2.png" alt="samsung 2" >
                                    <div class="caption">
                                        <p>Samsung Galaxy Note 8 plus ,
                                        Price: Rs. 60000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                



                       

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#9</h3>
                        </div>
                                <img src="./img/s3.png" alt="samsung 3" >
                                    <div class="caption">
                                        <p>Samsung galaxy s7 ,
                                        Price: Rs. 45000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        

                        </div>






                        <div class="row text-center" id="xiaomi">

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#10</h3>
                        </div>
                                <img src="./img/m1.png" alt="iphone xiaomi 1" >
                                    <div class="caption">
                                        <p>Mi A1 ,
                                        Price: Rs. 15000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
            




                        

              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#11</h3>
                        </div>
                                <img src="./img/m2.png" alt="xiaomi 2" >
                                    <div class="caption">
                                        <p>Mi Max 2 ,
                                        Price: Rs. 16000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        




              <div class="col-sm-4 home-feature">
                   
                            <div class="thumbnail">
                                <div class="panel-heading  color" style="background-color: #f5f5f5">
                            <h3 style="color:black">#12</h3>
                        </div>
                                <img src="./img/m3.png" alt="Xiaomi 3" >
                                    <div class="caption">
                                        <p>Mi Mix 3 , 
                                        Price: Rs. 18000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            
            

   <?php include 'includes/footer.php'; ?>
</body>
</html>
                         
