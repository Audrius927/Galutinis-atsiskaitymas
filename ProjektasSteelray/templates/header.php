<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Svetainė</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Pagrindinis</a></li>
                <li><a href="about.php">Apie mus</a></li>
                <li><a href="services.php">Paslaugos</a></li>
                <li><a href="gallery.php">Galerija</a></li>
                <li><a href="contact.php">Susisiekime</a></li>
            </ul>
        </nav>
        <div>
            <?php
            session_start();
            if (isset($_SESSION['u_id'])) {
                echo '<form action="includes/logout.php" method="POST">
                    <button type="submit">Atsijungti</button>
                </form>';
            } else {
                echo '
                <a href="signup.php" style="color: white; text-decoration:none; padding:0 5px;">Registruotis</a>';
                echo '<a href="signin.php"style="color: white; text-decoration:none;">Prisijungti</a>';
            }
            ?>
        </div>
    </header>
</body>

</html>