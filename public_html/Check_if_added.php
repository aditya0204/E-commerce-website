<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php 
       

        
       function check_if_added_to_cart($item_id){
           include 'common.php';

         $user_id=$_SESSION['id'];
        $select_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='added_to_cart'";
          $result=mysqli_query($con,$select_query);

         if(mysqli_num_rows($result)>=1){
          return 1;
         }
           else{
            return 0;
           }
           
           
       }
       
       ?>
    </body>
</html>
