<!DOCTYPE html>
<html>
    <head>
        <title>Add New Registrations</title>
    </head>
    <body>
        <h1>New Registrations</h1>
        <?php
        require('connect.php');
        if (isset($_POST)){
            $location=$_POST['location'];
            $last_name=$_POST['last_name'];
            $first_name=$_POST['first_name'];
            $email=$_POST['email'];
            $query="INSERT INTO REGISTRATION (location,last_name,first_name,email) VALUES ('$location','$last_name','$first_name','$email')";
            $result=mysqli_query($connection,$query);
           if ($result) {
              echo "<p>New Registration created successfully</p>"; }
           else {
              echo "<p>There was an error " . mysqli_error($connection) . "</p>";}
        }
        echo"<p><a href='list_registration.php'>List registrations</a></p>";
        
        ?>
    </body>
</html>
