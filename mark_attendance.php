<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>

    <!-- Include custom CSS file for styling -->
    <link rel="stylesheet" href="./font.css">
    <style>
    /* Basic styling for the page */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7f6;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Styling the form container */
    .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        font-size: 24px;
        color: #333;
    }

    label {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
        display: block;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-container {
            padding: 15px;
        }

        h1 {
            font-size: 20px;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 18px;
        }

        button {
            font-size: 14px;
        }

        input,
        button {
            padding: 8px;
        }
    }
    </style>
</head>

<body>

    <?php


    $connection = mysqli_connect('localhost', 'root', '', 'institution database attendance');
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $unique_id = isset($_POST['unique_id']) ? $_POST['unique_id'] : '';
    $query = "SELECT * FROM students WHERE unique_id = '$unique_id'";
            $execute = mysqli_query($connection, $query);

        if (!empty($unique_id)) {
        
            if (mysqli_num_rows($execute) > 0) {
                $student = mysqli_fetch_assoc($execute);
                $student_name = $student['name'];
                $attendance_date = date('Y-m-d');
                
               
             echo   "<script>
                
                alert('Attendance marked')
                
                </script>";

                $insert = "INSERT INTO attendance (unique_id, attendance_date, name) VALUES ('$unique_id', '$attendance_date', '$student_name')";
                $exc = mysqli_query($connection, $insert);

                if (!$exc) {
                    echo "<div style='text-align: center; color: red;'>Error inserting attendance: " . mysqli_error($connection) . "</div>";
                } else {
                  
                }
            } else {
                echo "<div style='text-align: center; color: red;'>Invalid Unique ID!</div><br>";
            }
        } else {
            echo "<div style='text-align: center; color: red;'>Please enter a Unique ID!</div><br>";
        }
    }
    ?>

    <!-- Form Container -->
    <div class="form-container">
        <h1>Mark Attendance</h1>
        <form method="POST" action="">
            <label for="unique_id">Enter Unique ID:</label>
            <input type="text" name="unique_id" id="unique_id" required>
            <button type="submit">Mark Attendance</button>
        </form>
    </div>

</body>

</html>