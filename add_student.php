<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Student</title>
    <style>
    /* Basic styling */
    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #333;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        margin: 0 20px;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        font-size: 28px;
        color: #4CAF50;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    label {
        font-size: 16px;
        color: #555;
        margin-bottom: 5px;
        text-align: left;
    }

    .inputs {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        background-color: #f4f4f4;
        transition: 0.3s ease;
        box-sizing: border-box;
    }

    .inputs:focus {
        border-color: #4CAF50;
        background-color: #e8f5e8;
        outline: none;
    }

    button {
        width: 100%;
        padding: 15px;
        font-size: 16px;
        color: white;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        box-sizing: border-box;
    }

    button:hover {
        background-color: #45a049;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        .inputs {
            font-size: 15px;
        }

        button {
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 20px;
        }

        .inputs {
            font-size: 14px;
            padding: 10px;
        }

        button {
            font-size: 14px;
            padding: 12px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add Student</h1>

        <!-- PHP code will be executed here -->
        <?php
        error_reporting(E_ERROR | E_PARSE); // Hide warnings and notices

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $class = isset($_POST['class']) ? $_POST['class'] : '';
            $joined_date = isset($_POST['joined_date']) ? $_POST['joined_date'] : '';
            $unique_id = uniqid(); // Generate a unique ID

            $message = 'All fields are required';
            $conn = mysqli_connect('localhost', 'root', '', 'institution database attendance');

            $sql = "INSERT INTO students (unique_id, name, class, joined_date) VALUES ('$unique_id', '$name', '$class', '$joined_date')";
            $execute = mysqli_query($conn, $sql);

            if (!empty($name) && !empty($class) && !empty($joined_date)) {
                echo "<p style='color: green; text-align: center;'>Data added. Unique ID is $unique_id</p>";
            }
            error_reporting(0);
            ini_set('display_errors', 0);
        }
        ?>

        <!-- Form for adding student -->
        <form method="POST" action="" id="myForm">
            <label for="name">Name:</label>
            <input class="inputs" type="text" name="name" id="name" required>

            <label for="class">Class:</label>
            <input class="inputs" type="text" name="class" id="class" required>

            <label for="joined_date">Joining Date:</label>
            <input class="inputs" type="date" name="joined_date" id="joined_date" required>

            <button type="submit">Add Student</button>
        </form>
    </div>

    <script>
    window.onload = function() {
        // Reset the form on page load (optional)
        document.getElementById('myForm').reset();
    };
    </script>
</body>

</html>