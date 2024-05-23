<?php include 'templates/header.php'; ?>
<h2 class="pavadinimas">Prisijungimas</h2>
<form action="includes/login.php" method="POST">
            <input type="text" name="uid" placeholder="Naudotojo vardas">
            <input type="password" name="pwd" placeholder="Slaptažodis">
            <button type="submit">Prisijungti</button>
        </form>
        <?php include 'templates/footer.php'; ?>        