<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  rel="stylesheet" type="text/css" href="index.html"/>
    <style>
    
 
 
 
     
        #footer_style{
           
          position: absolute;  
            padding: 10px 0;
background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%
     
 }
</style>
</head>
<body>
 
 <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"> 
                <div class="nav navbar-header">
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mybar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                </div>
                
                  <div class="nav navbar-collapse" id="mybar">
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                       <li><a href="#"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                    </ul>
                </div>
        
            </div>
        </nav>


<div class=" container">
 <h1 style="margin-top: 7%;">Thank you for Shopping with us. <a href="product.php"> Click here </a>to buy more products.</h1>
</div>
<?php
 include 'footer.php';
 ?>
   

</body>
</html>