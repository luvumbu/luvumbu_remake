<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-box {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 300px;
    }

    .form-box h2 {
      margin-bottom: 15px;
      text-align: center;
      color: #333;
    }

    .form-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .form-box button {
      width: 100%;
      padding: 10px;
      background: #007BFF;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .form-box button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <form class="form-box">
    <h2>Connexion</h2>
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Mot de passe" required>
    <button type="submit">Send</button>
  </form>

</body>
</html>
