<?php
include 'common.php';
if(!isset($_SESSION["email"])){
    header('location : index.php');
}

$email=$_SESSION['email'];
$oldp =mysqli_real_escape_string($con,$_POST["old_password"]);

$newp =mysqli_real_escape_string($con,$_POST["new_password"]);

$rep =mysqli_real_escape_string($con,$_POST["re_password"]);

 
if($newp==$rep){

$select_query="SELECT email FROM users WHERE password='$oldp'";

 $select_result=mysqli_query($con,$select_query);
  if(mysqli_num_rows($select_result)>=1)
  {

     $update_query="UPDATE users SET password = '$newp' WHERE email='$email'";
      mysqli_query($con,$update_query);
      header('location:index.php');
   }

  else{

  	echo "does not match";
  }


}



else{

echo "Error occured:id not found";

}

?>