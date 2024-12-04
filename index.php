<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <style>
    /* Basic Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    h1 {
        color: #2c3e50;
        font-size: 2.5em;
        margin-bottom: 50px;
        text-align: center;
    }

    /* Container for the buttons */
    .container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 500px;
        padding: 10px;
        gap: 20px;
        flex-wrap: wrap;
    }

    .signup,
    .signin {
        width: 100%;
        text-align: center;
        margin: 10px 0;
    }

    h3 {
        font-size: 1.5em;
        color: #fff;
        background-color: #3498db;
        padding: 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    a {
        outline: none;
        text-decoration: none;
    }

    h3:hover {
        background-color: #2980b9;
    }

    /* Responsive styling for tablets and mobile */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: 2em;
        }
    }

    /* Styling for larger screens (laptops/desktops) */
    @media (min-width: 769px) {
        h1 {
            font-size: 3em;
        }

        .container {
            flex-direction: row;
        }
    }
    </style>
</head>

<body>
    <h1>Welcome to the Attendance System</h1>
    <div class="container">
        <div class="signup">
            <a href="./signup.php">
                <h3>Sign Up</h3>
            </a>
        </div>
        <div class="signin">
            <a href="./login.php">
                <h3>Sign In</h3>
            </a>
        </div>
    </div>
</body>

</html>