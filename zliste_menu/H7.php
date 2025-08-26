<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            border-bottom: 1px solid #ccc;
        }
        .navbar .logo {
            letter-spacing: 3px;
        }
        .navbar .menu {
            display: flex;
            gap: 30px;
            letter-spacing: 2px;
        }
        .navbar a {
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Gourmet au Catering</div>
        <div class="menu">
            <a href="#">About</a>
            <a href="#">Menu</a>
            <a href="#">Contact</a>
        </div>
    </nav>
</body>
</html>
