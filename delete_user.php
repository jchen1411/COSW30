<?php
    require('connect.php');
    if(isset($_POST['user_id'])&&is_numeric($_POST['user_id'])){
            $user_id=$_GET['id'];
            $query="UPDATE USER 
                    SET 
                    last_name='$last_name',
                    location='$location'
                    where fist_name='$first_name'
                        
                (first_name,last_name,location) VALUES ('$first_name','$last_name','$location')";
            $result=mysqli_query($connection,$query);
           if ($result) {
              echo "<p>".$first_name . " ".$last_name." has been updated in our system.</p>"; }
           else {
              echo "<p>There was an error " . mysqli_error($connection) . "</p>";}
            }
