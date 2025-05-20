<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      background-color: #1a1a1a;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background-color: #2c2c2c;
      border: 1px solid #444;
      border-radius: 10px;
      padding: 20px;
      width: 100%;
      max-width: 400px;
    }

    .form-control {
      background-color: #3a3a3a;
      color: white;
      border: 1px solid #666;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    label {
      color: white;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="card">
    <div class="card-header text-center">
      <h4>Login Admin</h4>
    </div>
    <div class="card-body">
      <form method="post" action="proses-login.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>

</body>
</html>
