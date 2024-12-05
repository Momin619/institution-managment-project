<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
 $query = "INSERT INTO users (username , password) VALUES ('{$username}','{$password}')";
    include "./connection.php";
    $execute = mysqli_query($connection,$query);
    if (!empty($username) && !empty($password)) {
        // Optionally: Perform additional validation here
        if (strlen($username) < 3) {
            // Redirect with an error message
            header("Location: ./signup.php?error=Username must be at least 3 characters");
            exit;
        }

        if (strlen($password) < 8) {
            header("Location: ./signup.php?error=Password must be at least 8 characters");
            exit;
        }

        // Redirect to login if valid
        header("Location: ./login.php");
        exit;
    } else {
        // Redirect back with an error
        header("Location: ./signup.php?error=Please fill in all fields");
        exit;
    }
}





?>