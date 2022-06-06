<?php
session_start();
require './validates.php';
require './config.php';
function SELECT_USER($email, $senha, $conn)
{
    $query_select = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    $validate_select = mysqli_query($conn, $query_select);
    while ($user = mysqli_fetch_assoc($validate_select)) {
        $_SESSION['user'] = $user['empresa'];
    }
}
if (isset($_POST['btn-submit'])) {
    $FILTER = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (in_array("", $FILTER)) {
        $_SESSION['empty__error'] = "Preencha todos os campos!";
        header("Location: ../_template/register.php");
    }
    else {
        if (!is_email($_POST['email'])) {
            $_SESSION['email__error'] = "E-mail inválido!";
            header("Location: ../_template/register.php");
        }
        else {
            /*RECEBENDO OS DADOS!**********************************************************************/
            $email = $_POST['email'];
            if (!is_password($_POST['senha'])) {
                $_SESSION['error_senha'] = "Senha demasiado curta!";
                header("Location: ../_template/register.php");
            }
            else {
                $senha = md5(filter_var($_POST['senha'], FILTER_SANITIZE_SPECIAL_CHARS));
                $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_SPECIAL_CHARS);
                $link_page = filter_var($_POST['link_page'], FILTER_SANITIZE_SPECIAL_CHARS);
                $anuncio_title = filter_var($_POST['anuncio__title'], FILTER_SANITIZE_SPECIAL_CHARS);
                $descricao = filter_var($_POST['descricao'], FILTER_SANITIZE_SPECIAL_CHARS);
                $plan = filter_var($_POST['planos'], FILTER_SANITIZE_SPECIAL_CHARS);
                /******************************************************************************************/
                $query = "INSERT INTO cadastro(email, senha, empresa, link, anuncio, descricao, plano, created) 
        VALUES ('$email', '$senha', '$empresa', '$link_page', '$anuncio_title', '$descricao', '$plan', NOW())";
                $query_login = "INSERT INTO login(email, senha, empresa) VALUES ('$email', '$senha', '$empresa')";
                $validate_login = mysqli_query($conn, $query_login);
                $validate_query = mysqli_query($conn, $query);
                /********************************************************************************************/
                if ($validate_query) {
                    $_SESSION['sucess'] = "Cadastro ao serviço efectuado!";
                    header("Location: ../_template/register.php");
                }

                SELECT_USER($email, $senha, $conn);

            }
        }
    }
}