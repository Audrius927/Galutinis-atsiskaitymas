<?php include 'templates/header.php'; ?>
<h2 class="pavadinimas">Registracija</h2>
<form action="includes/signup.php" method="post">
    <input type="text" name="first" placeholder="Vardas" required>
    <input type="text" name="last" placeholder="Pavardė" required>
    <input type="email" name="email" placeholder="El. paštas" required>
    <input type="text" name="uid" placeholder="Naudotojo vardas" required>
    <input type="password" name="pwd" placeholder="Slaptažodis" required>
    <button type="submit">Registruotis</button>
</form>
<?php include 'templates/footer.php'; ?>