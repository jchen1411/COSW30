<!DOCTYPE html>
<html>
    <head>
        <title>Add New Registrations</title>
    </head>
    <body>
        <h1>New Registrations</h1>
        <form method="post" action="register_newregistration.php">
            <p>
            <lable for="location">Registration location:</label>
            <input type="text" id="location" name="location" required>
            </p>
            <p>
            <lable for="last_name ">Registration last name:</label>
            <input type="text" id="last_name" name="last_name" required>
            </p>
            <p>
            <lable for="first_name">Registration first name:</label>
            <input type="text" id="first_name" name="first_name" required>
            </p>
            <p>
            <lable for="email">Registration email:</label>
            <input type="text" id="email" name="email" required>
            </p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>
