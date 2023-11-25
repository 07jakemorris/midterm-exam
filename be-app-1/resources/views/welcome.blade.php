<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Login Page</title>
</head>
<body style="font-family: Arial, sans-serif;
            background-color: #b4b4b4; 
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;"> 
    <div class="login-container" style="background-color: #ffffff;
                                        padding: 20px;
                                        border-radius: 8px;
                                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <form class="login-form" style="max-width: 300px;
                                        margin: 0 auto;">
            <h2 style="text-align: center;
                        color: #333333;">Login</h2>
            <label for="username" style=" display: block;
                                        margin-bottom: 8px;">Username:</label>
            <input type="text" id="username" name="username" style="width: 100%;
                                                                    padding: 8px;
                                                                    margin-bottom: 16px;
                                                                    border-radius: 4px;
                                                                    border: 1px solid #ccc;
                                                                    box-sizing: border-box;" required>
                                                                    
            <label for="password" style=" display: block;
                                        margin-bottom: 8px;">Password:</label>
            <input type="password" id="password" name="password" style="width: 100%;
                                                                    padding: 8px;
                                                                    margin-bottom: 16px;
                                                                    border-radius: 4px;
                                                                    border: 1px solid #ccc;
                                                                    box-sizing: border-box;" required>

            <button type="submit" style="background-color: #4caf50;
                                        color: white;
                                        padding: 10px 15px;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        width: 100%;">Login</button>
        </form>
    </div>
</body>
</html>