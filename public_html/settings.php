

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mybar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                </div>
                
                  <div class="collapse navbar-collapse" id="mybar">
                    <ul class=" nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                       <li><a href="#"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                    </ul>
                </div>
        
            </div>
        </nav>
        
         <div class="container" style="margin-top: 8%;">
            <div class="row">
              <div class="col-md-3">
              </div>
                 <div class="col-md-6">
                <form action="settings_script.php" method="post">
                <h1>Change Password</h1>
           
           
            <div class="form-group">
                <input type="password" class="form-control" placeholder=" Old Password" name="old_password"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="New password" name="new_password"/>
            </div>
                        <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-type Password" name="re_password"/>
            </div>
                 <input type="submit" name="Submit" class="btn btn-primary">
                </form>  
                        
                       
                    </div>
                    <div class="col-md-3">
                    </div>
            </div>
         </div>
        
        
        
        <footer>
            <center>   <div class="container" id="footer_style">
               Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000
                </div></center>
        </footer>
    </body>
</html>
