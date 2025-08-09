<?php
session_start();

// Check if form is submitted
if(isset($_POST['login'])){
    // Check if password is correct
    $password = $_POST['password'];
    if($password === 'MO'){ // Replace 'your_password' with your actual password
        $_SESSION['login'] = true; // Set login session variable
        header('Location: ./index.php'); // Redirect to index.php
        exit(); // Exit script
    } else {
        // Display error message
        $error_message = "Incorrect password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <style>
        body {
            background: url('https://media1.tenor.com/m/ZQndYO4NwBcAAAAC/gojo-satoru.gif') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.3);
        }

        .login-box h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            animation: rgbFontChange 1s infinite alternate; /* Font color change */
        }

        @keyframes rgbFontChange {
            0% { color: rgb(255, 0, 0); } /* Red */
            50% { color: rgb(0, 255, 0); } /* Green */
            100% { color: rgb(0, 0, 255); } /* Blue */
        }

        .login-box input[type="password"] {
            width: calc(100% - 40px);
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        .login-box input[type="password"]:focus {
            outline: none;
            background-color: #444;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php
        // Display error message if password is incorrect
        if(isset($error_message)){
            echo '<p class="error-message">'.$error_message.'</p>';
        }
        ?>
        <form method="POST">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="login-btn" name="login">Login</button>
        </form>
    </div>
</body>
</html>
