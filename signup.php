<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <style>
    /* Basic styling for body */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    /* Form container */
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 400px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    /* Input fields */
    input[type="text"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
        width: 94%;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #3498db;
        outline: none;
    }

    /* Error message styling */
    .error-message {
        color: red;
        font-size: 0.9em;
        margin-bottom: -10px;
    }

    /* Label styling */
    label {
        font-size: 1.1em;
        color: #333;
    }

    /* Submit button */
    button {
        padding: 14px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    /* Responsive design for tablets */
    @media (max-width: 768px) {
        form {
            padding: 20px;
            width: 100%;
        }
    }

    /* Responsive design for mobile phones */
    @media (max-width: 480px) {
        form {
            padding: 15px;
            width: 100%;
        }

        label {
            font-size: 1em;
        }

        button {
            font-size: 1em;
            padding: 12px;
        }
    }
    </style>
</head>

<body>
    <form action="" method="post" id='hidden'>
        <!-- Display error messages if any -->
        <?php if (isset($_GET['error'])): ?>
        <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>

        <button type="submit">Submit Details</button>
    </form>

    <?php
      include "./connection.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if (!empty($username) && !empty($password)) {
           
            // Optionally: Perform additional validation here
           if (strlen($username) < 5 && strlen($password) < 8) {
    header("Location: ./signup.php?error=Username must be at least 5 characters and Password must be at least 8 characters");
    exit;
}

 $query = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')";
        $execute = mysqli_query($connection, $query);

        if ($execute) {
            header("Location: ./login.php");
            exit;
        } else {
            header("Location: ./signup.php?error=Failed to insert data");
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
</body>

</html>