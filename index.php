<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: url('https://api.dujin.org/bing/1366.php') center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff; /* Text color on top of the background image */
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: block;
        }

        .login-form {
            display: none;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .toggle-btn {
            background-color: #3498db;
            color: white;
            padding: 8px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
        }

        .toggle-btn:hover {
            background-color: #2980b9;
        }
    </style>
    <script>
        function toggleForms() {
            var registerForm = document.getElementById("register-form");
            var loginForm = document.getElementById("login-form");
            var registerTitle = document.getElementById("register-title");
            var loginTitle = document.getElementById("login-title");

            if (registerForm.style.display === "block") {
                registerForm.style.display = "none";
                loginForm.style.display = "block";
                registerTitle.style.display = "none";
                loginTitle.style.display = "block";
            } else {
                registerForm.style.display = "block";
                loginForm.style.display = "none";
                registerTitle.style.display = "block";
                loginTitle.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <h2 id="register-title">Register</h2>
    <form id="register-form" action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Register">
    </form>

    <h2 id="login-title" class="login-form">Login</h2>
    <form id="login-form" class="login-form" action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>

    <button class="toggle-btn" onclick="toggleForms()">Toggle Login Forms</button>
</body>
</html>
