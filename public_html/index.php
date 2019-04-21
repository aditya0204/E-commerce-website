<?php    
        include 'common.php';
        if (isset($_SESSION['email'])) 
            { header('location: product.php'); }
        include 'headers.php';
        
        
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <title>Lifestyle store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" type="text/css" href="index.html"/>
  
    <style>
        #banner_image{
     padding-top: 75px;
 padding-bottom: 50px;
 text-align: center;
 color: #f8f8f8;
 background: url(images/intro-bg_1.jpg) no-repeat center center;
 background-size: cover;
}

#banner_content{
    position: relative;
 padding-top: 6%;
 padding-bottom: 6%;
 margin-top: 12%;
 margin-bottom: 12%;
 background-color: rgba(0, 0, 0, 0.7);
 max-width: 660px;
  
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
       
        
        
   
        <div id="banner_image">
            <div class="container">
                <center>     <div id="banner_content">
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div> </center>
            </div>
        </div>

          <div class="container" style="margin-top: 5%;">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="images/camera.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="product.php" >
                            <div class="thumbnail">
                                <img src="images/watch.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="product.php" >
                            <div class="thumbnail">
                                <img src="images/shirt.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
    <?php  
    
    include 'footer.php';
    ?>
    </body>
</html>
