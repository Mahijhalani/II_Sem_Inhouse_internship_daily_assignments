<?php
session_start();

// If user is logged in, show name, else Guest
$user = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f5f3ff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 15px 30px;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .logo {
            font-weight: bold;
            color: #6b4ce6;
        }

        .buttons a {
            text-decoration: none;
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .login-btn {
            background: #ede9fe;
            color: #6b4ce6;
        }

        .logout-btn {
            background: #6b4ce6;
            color: white;
        }

        .buttons a:hover {
            opacity: 0.85;
        }

        /* Welcome Section */
        .welcome {
            margin-top: 60px;
            width: 60%;
            background: #e9d8fd;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .welcome h1 {
            color: #190ca9;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #1f72d1;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">My Dashboard</div>

        <div class="buttons">
            <a href="login.php" class="login-btn">Login</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome">
        <h1>Welcome   <?php echo $user; ?></h1>
        <p>  Welcome back! Glad to see you again.</p>
    </div>

</body>
</html>
