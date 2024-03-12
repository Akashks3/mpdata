<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link href="register.css" rel='stylesheet'>
</head>
<body>
<?php
    require('db.php');
    
    // Function to sanitize user input
    function sanitizeInput($input) {
        return mysqli_real_escape_string($con, stripslashes($input));
    }

    // Function to validate email
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Function to validate password (you can add more complex rules as needed)
    function validatePassword($password) {
        return strlen($password) >= 6; // Password must be at least 6 characters long
    }

    // Function to validate other fields (you can add more rules as needed)
    // Example: validateName, validateDateOfBirth, etc.

    // When form submitted, insert values into the database.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize inputs
        $username = sanitizeInput($_POST['username']);
        $email = sanitizeInput($_POST['email']);
        $password = sanitizeInput($_POST['password']);
        $stname = sanitizeInput($_POST['stname']);
        // Add validation for other fields

        // Validate email
        if (!validateEmail($email)) {
            echo "<div class='form'>
                  <h3>Invalid email address.</h3><br/>
                  <p class='link'>Click here to <a href='registration_process.php'>registration</a> again.</p>
                  </div>";
            exit();
        }

        // Validate password
        if (!validatePassword($password)) {
            echo "<div class='form'>
                  <h3>Password must be at least 6 characters long.</h3><br/>
                  <p class='link'>Click here to <a href='registration_process.php'>registration</a> again.</p>
                  </div>";
            exit();
        }

        // Add more validation as needed for other fields

        // Insert into database
        $query = "INSERT into `reg` (username, email, password, ...)
                  VALUES ('$username', '$email', '" . md5($password) . "', ...)";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Registration failed. Please try again later.</h3><br/>
                  <p class='link'>Click here to <a href='registration_process.php'>registration</a> again.</p>
                  </div>";
        }
    }
?>
    <!-- Your HTML form -->
</body>
</html>
