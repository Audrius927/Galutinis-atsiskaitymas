<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $name, $email, $message);

    if ($sql->execute()) {
        echo "Jūsų žinutė buvo išsiųsta.";
    } else {
        echo "Klaida: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
