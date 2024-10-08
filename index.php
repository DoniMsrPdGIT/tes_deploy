<!DOCTYPE html>
<html>
<head>
  <title>Login Page Teseter Deploy</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .login-container {
      width: 300px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-form {
      margin-top: 20px;
    }
    .login-form input[type="text"], .login-form input[type="password"] {
      width: 100%;
      height: 40px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-form input[type="submit"] {
      width: 100%;
      height: 40px;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-form input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2>Login</h2>
    </div>
    <form class="login-form" action="" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
