<!DOCTYPE html>
<html>
<body>

<h2>User Registration Form</h2>
<form method="post">
  Username: <input type="text" name="username"><br><br>
  Email: <input type="email" name="email"><br><br>
  <input type="submit" name="submit" value="Submit">
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

    $sql = "INSERT INTO user (Name, Email) VALUES ('$u name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
</body>
</html>
