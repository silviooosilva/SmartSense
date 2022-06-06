<?php
require "./validates.php";
require "./config.php";
session_start();
if (isset($_POST['btn'])) {
    $FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (in_array("", $FILTER)) {
        $_SESSION['error'] = "PREENCHA TODOS OS CAMPOS!";
        header("Location: ../_template/login.php");
    }
    else {
        if (!is_email($_POST['email'])) {
            $_SESSION['error_email'] = "E-mail inválido! Tente Novamente...";
            header("Location: ../_template/login.php");
        }
        else {
            $email = $_POST['email'];
            if (!is_password($_POST['password'])) {
                $_SESSION['error_password'] = "Senha demasiado curta!";
                header("Location: ../_template/login.php");
            }
            else {
                $senha = md5(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
            }
        }

        $query = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $validate_query = mysqli_query($conn, $query);
        if (mysqli_num_rows($validate_query) > 0) {
            while ($login = mysqli_fetch_array($validate_query)) {
                $_SESSION['user'] = $login['empresa'];
                header("Location: ../_template/home.php");
            }
        }
        else {
            $_SESSION['not_found'] = "Usúario não encontrado... Tente Novamente";
            header("Location: ../_template/login.php");
        }
    }


}