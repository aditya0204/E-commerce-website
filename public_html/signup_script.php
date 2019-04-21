<?php 
        require 'common.php';
        $name=mysqli_real_escape_string($con,$_POST['name']);
       
        $password= mysqli_real_escape_string($con,$_POST['password']);
        $email= mysqli_real_escape_string($con,$_POST['email']);
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
        $address= mysqli_real_escape_string($con,$_POST['address']);
        $city=mysqli_real_escape_string($con,$_POST['city']);
       $select_mail_query="SELECT id FROM users WHERE email='$email'";
       $select_query_result=mysqli_query($con,$select_mail_query);
       


       if ( mysqli_num_rows($select_query_result)> 0){
       echo 'id already exist';
                 
                        
       }
       
       else
       { 

           $insert_query="INSERT into users(name, email,password,contact,city,address)VALUES ('$name','$email','$password','$contact','$city','$address')";
       
       $r=  mysqli_query($con,$insert_query);
        $p_key=mysqli_insert_id($con);   
                    $_SESSION['id']=mysqli_insert_id($con);
                  $_SESSION["email"]=$email;
                 
                 echo $_SESSION['id'];
                     header('location: product.php'); 

       }
       
       ?>