<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background-image: url("login-bg.jpg"); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-form {
            width: 350px;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        h1 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>BEM VINDO</h1>
            <form>
                <label for="username">EMAIL</label>
                <input type="text" id="username" name="username" placeholder="Entre com seu EMAIL">
                <label for="password">SENHA</label>
                <input type="password" id="password" name="password" placeholder="Entre com sua SENHA">
                <button type="submit">SENHA</button>
            </form>
        </div>
    </div>
</body>
</html>
