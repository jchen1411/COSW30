<style>
    body{
        text-align: center;
        margin:2% 10%;
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
echo"<h1>List of Website Users</h1>";

$query ="SELECT *
         FROM USERS
         ORDER BY last_name";

$result=mysqli_query($connection,$query);

echo "<table><thead><td>Name</td><td>Location</td></thead>";
while ($row=mysqli_fetch_assoc($result)){
    echo "<tr><td> ". $row['last_name'] . ", ". $row['first_name'] . "</td><td>" . $row['location'] . "</td></tr>";
}
echo"</table>";

echo"<p><a href='list_registration.php'>List Registrations</a></p>";

?>
