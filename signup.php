<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <style>
    /* Basic styling for body */
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

    /* Container to center the form */
    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    /* Input field styling */
    input[type="text"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
        width: 93%;
        margin-bottom: 15px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #3498db;
        outline: none;
    }

    /* Label styling */
    label {
        font-size: 1.1em;
        color: #333;
    }

    /* Button styling */
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


    /* Responsive Design */
    @media (max-width: 768px) and (min-width:650px) {
        body {
            padding: 10px;
        }

        form {
            max-width: 100%;
            padding: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
        }

        label {
            font-size: 1em;
        }

        button {
            width: 93.5%;
            display: block;
            margin-left: 0%;

            font-size: 1.1em;
            padding: 12px;
        }
    }
    </style>
</head>

<body>
    <form action="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Submit Details</button>
    </form>
</body>

</html>