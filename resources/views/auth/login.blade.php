<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Hospital Records</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      height: 100vh;
      background-color: #e0ebec;
    }

    .sidebar {
      width: 300px;
      background-color: #0a66c2;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .sidebar h2 {
      margin-top: 20px;
    }

    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #e0ebec;
    }

    .login-box {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #0a66c2;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .form-group input {
      width: 100%;
      padding: 10px 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background-color: #0a66c2;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-login:hover {
      background-color: #084c9e;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <img src="{{ asset('img/avatar.png') }}" alt="Logo" style="width: 100px; border-radius: 50%;">
    <h2>Hospital Records</h2>
    {{-- <p>Welcome Back!</p> --}}
  </div>

  <div class="form-container">
    <div class="login-box">
      <h2>Admin Login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required autofocus>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
