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
        overflow: visible;
        width: 100%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    }

    tr {
        display: table-row !important;
    }

    /* Table Styling */

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #007BFF;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsiveness: Adjust table for mobile devices */
    @media (max-width: 768px) {
        table {
            width: 100%;
            margin: 10px;
        }

        th,
        td {
            padding: 8px;
            font-size: 14px;
        }

        table,
        th,
        td {
            display: block;
        }

        th {
            background-color: #007BFF;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        tr {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        td {
            display: block;
            padding: 8px 10px;
            text-align: right;
            width: 100%;
            border: none;
            background-color: #fff;
        }

        td:before {
            content: attr(data-label);
            font-weight: bold;
            padding-right: 5px;
            text-align: left;
        }
    }
    </style>
</head>

<body>
    <h1>Attendance Records</h1>

    <?php
    $conn =  mysqli_connect('localhost', 'root', '', 'institution database attendance');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT students.name, students.class, attendance.attendance_date, attendance.status 
FROM attendance 
JOIN students ON attendance.unique_id = students.unique_id;
";

    $result = $conn->query($sql);
echo "Total Rows: " . $result->num_rows;

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
            
                    <td data-label='Name'>" . $row['name'] . "</td>
                    <td data-label='Class'>" . $row['class'] . "</td>
                    <td data-label='Date'>" . $row['attendance_date'] . "</td>
                    <td data-label='Status'>" . $row['status'] . "</td>
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