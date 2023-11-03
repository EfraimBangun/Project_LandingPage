<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
            background-image: url('123.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        .custom-label {
            color: #4CAF50;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #message {
            color: #f00;
        }

        @media (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h2>Form Login</h2>
    <form id="loginForm">
        <label for="username" class="custom-label">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password" class="custom-label">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p id="message"></p>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();

            // Replace with the correct username and password
            const validUsername = "efraim";
            const validPassword = "efraim1234";

            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === validUsername && password === validPassword) {
                // Redirect to another page (update the URL as needed)
                window.location.href = "home.php";
            } else {
                document.getElementById("message").innerHTML = "Incorrect username or password. Please try again.";
            }
        });
    </script>
</body>
</html>
