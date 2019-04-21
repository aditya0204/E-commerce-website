<?php 
             include 'common.php';
            include 'headers.php';
            include  'Check_if_added.php';
            ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>You are logged in</title>
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link  rel="stylesheet" type="text/css" href="index.html"/>-->
    <style>
       
       .thumnail_style{
margin-top: 7%;

       }

        .jumb_style{
            margin-top: 5%;
        }
        #footer_style{
     padding: 10px 0;
background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%
     
 }

 

        
    </style>
    </head>
    <body>

           
       


        <div class="container" style="">
            <div class="jumbotron jumb_style">
                <h1>  Welcome to our Lifestyle Store! </h1>
                 <p>  We have the best cameras, watches and shirts for you. No need to hunt.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/camera.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Camera 1</h1>
                            <p> Price: 34000</p>
                                 
                        <?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                            
                        </div>
                      
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/cam2.jpeg" alt="camera" height="200" width="240"  />
                        <div class="caption">
                            <h1>Camera 2</h1>
                            <p> Price: 45000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/cam3.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Camera 3</h1>
                            <p> Price: 14000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/cam4.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Camera 4</h1>
                            <p> Price: 44000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
            </div>
            
            <hr>
            <div class="row-text-center"  style="margin-top: 3%;margin-bottom: 3%;">
                 <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/watch.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Watch</h1>
                            <p> Price: 34000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                       
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/watch2.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Watch</h1>
                            <p> Price: 45000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/watch3.jpg" alt="camera"  height="200" width="240"/>
                        <div class="caption">
                            <h1>watch</h1>
                            <p> Price: 14000</p>
                           <?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/watch4.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>watch</h1>
                            <p> Price: 44000</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?> 
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/shirt.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Shirt 1</h1>
                            <p> Price: 400</p>
                                 
                        <?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                            
                        </div>
                      
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/shirt4.jpg" alt="camera" height="200" width="240"  />
                        <div class="caption">
                            <h1>Shirt 4</h1>
                            <p> Price: 450</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/shirt2.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Shirt 2</h1>
                            <p> Price: 500</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
                   <div class="col-md-3 col-sm-6 thumnail_style">
                    <div class="">
                        <img src="images/shirt3.jpg" alt="camera" height="200" width="240" />
                        <div class="caption">
                            <h1>Shirt 3</h1>
                            <p> Price: 440</p><?php 


if (!isset($_SESSION['email'])) 
    { ?>


     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
    
    <?php } 


else {  
    if (check_if_added_to_cart(1)) { 

    echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>'; 
    } 
    
    else { ?> 

    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 


    <?php 
    }
     } 

    ?>
                            
                        </div>
                        
                    </div>
                      
                    
                </div>
            </div>
        </div>
           
        <footer>
            <center>   <div class="container" id="footer_style" style="margin-top: 2%;">
               Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000
                </div></center>
        </footer>
    </body>
</html>
