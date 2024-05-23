<?php include 'templates/header.php'; ?>
<div class="box-apie">
    <img src="./img//steel4.jpg" alt="" class="box-img">
    <h2 class="pavadinimas text-white">Susisiekime</h2>
    <form action="includes/sendmessage.php" method="post">
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Žinutė:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Siųsti</button>
    </form>
</div>

<?php include 'templates/footer.php'; ?>