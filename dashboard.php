<!DOCTYPE html>
<html lang="en">

<head>
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
        background: linear-gradient(135deg, #4CAF50, #0288D1);
        padding: 10px 20px;
        color: white;
        width: 100%;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: bold;
    }

    header h1 {
        font-size: 2em;
        margin: 0;
    }

    header p {
        font-size: 1.1em;
        text-align: right;
        flex: 1;
    }

    /* Main Content Section */
    main {
        margin-top: 70px;
        padding: 40px 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        justify-items: center;
        /* Ensures cards are centered */
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

    /* Responsive Design */
    @media (min-width: 768px) {
        main {
            margin: 70px 110px;
        }
    }

    @media (max-width: 768px) {
        header {
            flex-direction: column;
            align-items: flex-start;
            padding: 15px 20px;
        }

        header h1 {
            font-size: 1.6em;
            margin-bottom: 5px;
        }

        header p {
            font-size: 1em;
            text-align: left;
        }

        main {
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        }

        .card {
            max-width: 73%;
        }
    }

    @media (max-width: 480px) {
        body {
            overflow: hidden;
        }

        header {
            width: 100%;
        }

        .card {
            max-width: 100%;
        }

        main {
            width: 100%;
            margin: 70px 0px;
        }

        header h1 {
            font-size: 1em;
        }

        header p {
            font-size: 0.8em;
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

    @media only screen and (max-width:480px) and (min-width:319px) {
        header {
            width: 119%;
        }

        main {
            width: 100%;
            margin-left: 30px;
        }

        .card {
            max-width: 90%;
        }

    }

    @media only screen and (max-width:356px) and (min-width:320px) {
        header {
            width: 119%;
        }

        main {
            width: 100%;
            margin-left: -10px;
        }

        .card {
            max-width: 90%;
        }

    }

    @media only screen and (max-width:356px) and (min-width:326px) {
        header {
            width: 119%;
        }

        main {
            width: 100%;
            margin-left: 10px;
        }

        .card {
            max-width: 90%;
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