<?php 
        include 'common.php';
        
        if(isset($_SESSION['email'])) 
            { header('location: products.php'); }
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
        <title>Sign up </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .form_margin{
            margin-top:8%;
            margin-left: 35%;         
        }
        
   </style>
    
    
    </head>
    <body>
        
       

  
    <center>   
        <div class="container form_margin">
            <div class="row">
                <center> 
      <div class="col-xs-4">


     <form method="post" action="signup_script.php" style="margin-bottom: 45%;">
                <h1>Sign Up</h1>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name"/>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required="true" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}"/>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Contact" name="contact"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Address" name="address"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="City" name="city"/>
            </div>
                <button class="btn btn-primary">Submit</button>
                
        </form>
                </div>
                </center>
                </div>
        </div>
        </center>
 <?php 
 include 'footer.php';
 ?>
    </body>
</html>
