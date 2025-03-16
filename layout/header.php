<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: black;
            color: white;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 20px;
            font-size: 1.2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
        }

        .profile-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .profile-actions i {
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .profile-actions i:hover {
            color: #ddd;
        }

        .logout-button {
            padding: 8px 15px;
            background-color: #e74c3c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<header>
<div class="logo">Conseil Yeumbeul</div>
    <nav>
        <a href="?page=meet">Meet</a>
        <a href="?page=participant">Participants</a>
        <a href="#">Calendrier</a>
        

    </nav>
    <div class="profile-actions">
        <i class="fas fa-user-circle"></i>
        <button class="logout-button">Déconnexion</button>
    </div>
</header>

</body>
</html>
