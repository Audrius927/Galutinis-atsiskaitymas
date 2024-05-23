<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $first, $last, $email, $uid, $pwd);

    if ($sql->execute()) {
        header("Location: ../index.php?signup=success");
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
