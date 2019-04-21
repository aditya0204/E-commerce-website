<?php
include 'common.php';

if(!isset($_SESSION["email"])){
    header('location : login.php');
}
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart</title>
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
 bottom: 0%;
 width: 100%
     
 }
 .table_style{
     margin-top: 10%;
    margin-left: 20%;
 }
 </style>
 
 
 
    </head>
    <body>
      <?php 
      include 'headers.php';
      
      $id= $_SESSION["id"];
      
      $select_query="SELECT item_id FROM users_items WHERE user_id='$id'";

      ?>
        <div class="container">
    <center>  <div class="table_style col-xs-8"> <table class=" table table-bordered">
                <tbody>
            <tr>
                <th> Items</th>
                <th> Item Name</th>
                <th> price</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
              <tr>
                <td></td>
                <td>Total</td>
                <td></td>
                <td><a href="success.php" class="btn btn-primary">Confirm order</a></td>
                
            </tr>
            </tbody>
        </table>
        </div>
    </center>
        </div>
        <footer>
            <center>   <div class="container" id="footer_style">
               Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000
                </div></center>
        </footer>
    </body>
</html>
