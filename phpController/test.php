
<?php
$name=$_POST['name'];
$dayArray=$_POST['days'];
$combo=$_POST['combo'];

   $connection = new mysqli("localhost","root","amila1568","foodmanage",3306);

   if($connection){
       if(isset($_POST['btn'])){
           $days= implode(',', $dayArray);

           $result=$connection->query("insert into test values ('{$combo}','{$days}')");

           if ($result) {
               echo "<script type='text/javascript'>alert('Restaurant has been added successfully');</script>";
               echo '<script type="text/javascript">
           window.location = "addRestaurant.html"
      </script>';

           } else {
               echo "<script type='text/javascript'>alert('Failed to add Restaurant');</script>";
//            header('../view/addRestaurant.php');
               echo '<script type="text/javascript">
           window.location = "addRestaurant.html"
      </script>';
           }
       }
   }







