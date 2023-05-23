<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar-area">
        <div class="container">
            <nav class="site-navbar">
                <!-- site logo -->
                <a href="#home" class="site-logo">logo</a>
                <!-- site menu/nav -->
                <ul>
                    <li><a href="test.php">home</a></li>
                    <li><a href="about.php">about us</a></li>
                    <li><a href="blogs.php">find blogs</a></li>
                    <?php
                        if (isset($_SESSION['useruid'])) {
                            echo "<li><a href='profile.php'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else {
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                            echo "<li><a href='login.php'>Log in</a></li>";
                        }
                    ?>
                </ul>
                <!-- nav-toggler for mobile version only -->
                <button class="nav-toggler">
                    <span></span>
                </button>
            </nav>
        </div>
  </div>
  <div class="content-wrapper">
