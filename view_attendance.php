<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./font.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Records</title>

    <style>
    /* General styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7fa;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin: 20px;
        color: #333;
    }

    table {
        width: 100%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #007BFF;
        color: white;
        position: sticky;
        top: 0;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsive Design for Tablets and Mobile Devices */
    @media (max-width: 768px) {
        table {
            width: 100%;
            border: 0;
        }

        th,
        td {
            padding: 10px;
            font-size: 14px;
        }

        tr {
            display: block;
            margin-bottom: 10px;
        }

        td {
            display: block;
            text-align: right;
            border: 0;
            background-color: #fff;
            position: relative;
            padding-left: 50%;
            box-sizing: border-box;
        }

        td:before {
            content: attr(data-label);
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
            text-align: left;
            white-space: nowrap;
        }

        th {
            display: none;
        }
    }

    @media (max-width: 480px) {
        td {
            font-size: 12px;
            padding: 8px;
        }

        td:before {
            font-size: 12px;
        }
    }
    </style>
</head>

<body>
    <h1>Attendance Records</h1>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'institution database attendance');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT students.name, students.class, attendance.attendance_date, attendance.status 
            FROM attendance 
            JOIN students ON attendance.unique_id = students.unique_id;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td data-label='Name'>" . htmlspecialchars($row['name']) . "</td>
                    <td data-label='Class'>" . htmlspecialchars($row['class']) . "</td>
                    <td data-label='Date'>" . htmlspecialchars($row['attendance_date']) . "</td>
                    <td data-label='Status'>" . htmlspecialchars($row['status']) . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center; color: #333;'>No records found!</p>";
    }

    $conn->close();
    ?>
</body>

</html>