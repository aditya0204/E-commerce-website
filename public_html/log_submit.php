
       <?php
       include 'common.php';
       $email= mysqli_real_escape_string($con,$_POST['email']);
       $password=mysqli_real_escape_string($con,$_POST['password']);
       $select_mail_query="SELECT email from users WHERE password='$password' AND email='$email'";
       $select_query_result=mysqli_query($con,$select_mail_query);
       if ( mysqli_num_rows($select_query_result) == 0){
       echo 'no entry found';
                 
       }
       else{
       $row=mysqli_fetch_array($select_query_result,MYSQLI_NUM);
        printf ("%s (%s)\n",$row[0],$row[1]);
        session_start();  
        $_SESSION['id']=$row[0];
        $_SESSION['email']=$email;
         
         if (isset($_SESSION['email'])) { header('location: product.php'); }
       }
       
       
       ?>
  