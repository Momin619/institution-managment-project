<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
    /* General body styles */
    #hidden {
        display: none;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Form container */
    .form-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 400px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Input fields and button */
    .input-field {
        width: 100%;
        padding: 15px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 16px;
        box-sizing: border-box;
    }

    .input-field:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Submit button */
    .submit-btn {
        width: 100%;
        padding: 15px;
        background-color: #007bff;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-container {
            padding: 30px;
            width: 90%;
        }
    }

    @media (max-width: 480px) {
        h2 {
            font-size: 24px;
        }

        .input-field {
            font-size: 14px;
        }

        .submit-btn {
            font-size: 14px;
        }
    }

    #hidden {
        display: none;
    }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="input-field" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="input-field" required><br>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
    <?php
$connection = mysqli_connect('localhost', 'root', '', 'institution database attendance');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
  $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';


if(!empty($username) && !empty($password)){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);


// Correct SQL query syntax
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute the query and check for errors
$execute = mysqli_query($connection, $query);

if (!$execute) {
    die("Query failed: " . mysqli_error($connection)); // Output error message
}

// Check if any rows are returned
if (mysqli_num_rows($execute) > 0) {
    echo 'Login successful';
    header("Location:./dashboard.php");
} else {
    echo 'Invalid username or password';
}
}
// Sanitize user input to prevent SQL injection

?>

</body>

</html>