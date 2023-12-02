<html>
    <style>
    body{
        margin:2% 10%;
        text-align: center;
    }
    table{
        width:100%;
        border-collapse:collapse;
        font-size:0.9em;
        font-family: sans-serif;
        box-shadow:0 0 20px rgba(0,0,0,0.15);
        font-family:'Roboto',sans-serif;
    }
    thead{
        background-color:#333;
        color:#ffffff;
        text-align:left;
        padding: 12px 15px;
    }
    td{
        padding: 12px 15px;
    }
   
 
    
</style>

<?php

require('connect.php');
echo"<h1>List of Registrations</h1>";
if(isset($_GET['msg'])){
    echo"Record successfully updated.";
}

echo"<p><a href='add_registration.php'>Add New Registratoin</a></p>";
$query ="SELECT *
         FROM REGISTRATION
         ORDER BY location";

$result=mysqli_query($connection,$query);
echo "<table><thead><td>Location</td><td>Registration name</td><td>Registration email</td></thead>";
while ($row=mysqli_fetch_assoc($result)){
    echo "<tr><td> ". $row['location'] . "</td><td>" . $row['first_name']. " "  .$row['last_name']."</td><td>" . $row['email'] . "</td></tr>";
}
echo"</table>";
echo"<p><a href='list_users.php'>List Users</a></p>";

?>
</html>
