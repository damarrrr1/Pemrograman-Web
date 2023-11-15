<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] == "admin" && $_POST['password'] == "password") {
        header('Location: admin.php');
        exit(); 
    } else {
        $error_message = "Gagal masuk admin";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 200px;
            padding: 5px;
            margin-bottom: 15px;
        }

        p {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Form Verification</h2>
    
    <?php
    if (isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
