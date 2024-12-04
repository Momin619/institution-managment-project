<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./pics/icon-removebg-preview.png">
    <link rel="stylesheet" href="./font.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System Dashboard</title>
    <style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    /* Header Section */
    header {
        background-color: #4CAF50;
        padding: 20px;
        text-align: center;
        color: white;
    }

    header h1 {
        font-size: 2.5em;
        margin: 0;
    }

    /* Navigation Section */
    nav {
        display: flex;
        justify-content: center;
        background-color: #333;
        flex-wrap: wrap;
    }

    nav a {
        padding: 14px 20px;
        color: white;
        text-decoration: none;
        text-align: center;
        flex: 1;
        min-width: 150px;
        transition: background-color 0.3s;
    }

    nav a:hover {
        background-color: #575757;
    }

    /* Main Content Section */
    main {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 40px 10px;
        justify-items: center;
    }

    .card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        transition: transform 0.3s;
        width: 100%;
        max-width: 300px;
    }

    .card:hover {
        transform: translateY(-10px);
        cursor: pointer;
    }

    .card h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 1em;
        margin-bottom: 20px;
    }

    .card a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .card a:hover {
        background-color: #45a049;
    }

    /* Footer Section */
    footer {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2em;
        }

        nav {
            flex-direction: column;
        }

        .card {
            width: 100%;
            max-width: 90%;
        }
    }

    /* Mobile-specific styling */
    @media (max-width: 480px) and (min-width:200px) {
        nav a {
            padding: 12px;
            font-size: 1em;
        }

        .card h2 {
            font-size: 1.2em;
        }

        .card p {
            font-size: 0.9em;
        }

        footer p {
            font-size: 0.8em;
        }
    }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <h1>School Attendance System</h1>
        <p>Manage students, mark attendance, and view records</p>
    </header>

    <!-- Navigation Section -->
    <nav>
        <a href="add_student.php">Add Student</a>
        <a href="mark_attendance.php">Mark Attendance</a>
        <a href="view_attendance.php">View Attendance</a>
    </nav>

    <!-- Main Content Section -->
    <main>
        <div class="card">
            <h2>Add Student</h2>
            <p>Register new students in the system</p>
            <a href="add_student.php">Go to Add Student</a>
        </div>

        <div class="card">
            <h2>Mark Attendance</h2>
            <p>Record attendance for students daily</p>
            <a href="mark_attendance.php">Go to Mark Attendance</a>
        </div>

        <div class="card">
            <h2>View Attendance</h2>
            <p>View the attendance history of students</p>
            <a href="view_attendance.php">Go to View Attendance</a>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 School Attendance System | All Rights Reserved</p>
    </footer>

</body>

</html>