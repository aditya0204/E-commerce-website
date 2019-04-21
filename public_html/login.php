<?php    
        require 'common.php';
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
        <title>Log In</title>
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
             margin-top: 5%;
             padding: 10px 0;
             background-color: #101010;
                color:#9d9d9d;
             bottom: 0;
            width: 100%;
          }
 
 
 
 
 
    </style>
       
    </head>
    <body>
        
        
    
     <div class="container" style="margin-top: 9%; margin-bottom: 14%;">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4 row_style">
                    <h3>Login here</h3>
                <div class="panel panel-default panel-header panel_style">
                    <div class="panel-body">
                        <p class="text-warning"> Log in to make purchase. </p> 
                        <form method="post" action="log_submit.php">
                             <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" placeholder="Password" name="password"/>
            </div>
                            <button class="btn btn-primary">Log In</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Don't have an account? Register
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>  
    
        
    <?php 
     include 'footer.php';
    
    ?>
    </body>
</html>
