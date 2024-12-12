<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./pics/icon-removebg-preview.png">
    <link rel="stylesheet" href="./font.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System Dashboard</title>
    <style>
    /* Reset and Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #f4f4f4, #e0e0e0);
        color: #333;
        overflow-x: hidden;
    }

    /* Header Section */
    header {
        background: linear-gradient(135deg, #4CAF50, #45a049);
        padding: 10px 10px;
        text-align: center;
        color: white;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 2.8em;
        margin-bottom: 5px;
        animation: fadeInDown 1s ease-in-out;
    }

    header p {
        font-size: 1.2em;
        animation: fadeInUp 1s ease-in-out;
    }

    /* Navigation */
    nav {
        display: flex;
        justify-content: center;
        background-color: #333;
        flex-wrap: wrap;
        padding: 10px;
        animation: slideIn 1.2s ease-out;
        display: block;
        margin-top: 10%;
    }

    nav a {
        padding: 14px 20px;
        margin: 5px;
        color: white;
        text-decoration: none;
        text-align: center;
        font-size: 1.1em;


        background-color: #4CAF50;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    nav a:hover {
        background-color: #45a049;
        transform: scale(1.05);
    }

    /* Main Content Section */
    main {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        padding: 40px 10px;
        justify-items: center;
    }

    .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        padding: 25px;
        text-align: center;
        width: 100%;
        max-width: 300px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: zoomIn 0.8s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .card h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 1em;
        margin-bottom: 20px;
        color: #555;
    }

    .card a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-size: 1em;
        transition: background-color 0.3s, transform 0.3s;
    }

    .card a:hover {
        background-color: #45a049;
        transform: scale(1.1);
    }

    /* Footer Section */
    footer {
        background-color: #333;
        color: white;
        padding: 15px 10px;
        text-align: center;
        font-size: 0.9em;
        position: relative;
        bottom: 0;
        width: 100%;
        box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
    }

    footer p {
        margin: 0;
    }

    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2.2em;
        }

        nav {
            flex-direction: column;
        }

        .card {
            max-width: 90%;
        }
    }

    @media (max-width: 480px) {
        nav a {
            padding: 12px;
            font-size: 1em;
        }

        .card h2 {
            font-size: 1.4em;
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