<!DOCTYPE html>
<html>
<body>

<h2 style="color: darkblue; text-align: center;">User Registration Form</h2>

<form method="post" style="background-color: lightblue; padding: 20px; border-radius: 10px; width: 300px; margin: auto;">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" style="width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px;"><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" style="width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px;"><br>
  
  <input type="submit" name="submit" value="Submit" style="background-color: darkblue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
</form>

<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    // Database
    $servername = "database-1.c582eqyay70n.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "ThejasPhp!03";
    $dbname = "phpdb";

    // Database connection
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO user (Name, Email) VALUES ('$uname', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green; text-align: center;'>New record created successfully</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>

</body>
</html>

