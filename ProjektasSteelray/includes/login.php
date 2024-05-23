<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = $conn->prepare("SELECT * FROM users WHERE user_uid = ?");
    $sql->bind_param("s", $uid);
    $sql->execute();
    $result = $sql->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pwd, $row['user_pwd'])) {
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['user_first'];
            $_SESSION['u_last'] = $row['user_last'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_uid'] = $row['user_uid'];
            header("Location: ../index.php?login=success");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }

    $sql->close();
    $conn->close();
}
