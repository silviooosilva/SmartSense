<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartAds | Dashboard</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="over">
        <header class="header">
            <div class="content">
                <div class="container">
                    <a href="../_template/index.php">
                        <h3 class="header__title">SmartAds</h3>
                    </a>
                    <h3 class="h3 else">Painel Administrativo</h3>
                </div>
                <div class="">
                    <span class="user__name"><?php echo $_SESSION['user']; ?></span>
                    <img src="../assets/img/avatar.svg" alt="Avatar Usuario" id="avatar__img">
                    <a href="../_template/logout.php"><span class="out">Sair</span></a>
                </div>
            </div>
        </header>
        <!--
             
        -->
    </section>
    <section class="dashboard">
        <div class="container">
            <div class="cards__dash">
                <div class="dash__card first">
                    <span class="title__card">Pessoas Alcançadas</span>
                    <h5 class="h5 form-text">5.000k</h5>
                </div>
                <div class="dash__card sec">
                    <span class="title__card">Ganhos gerados</span>
                    <h5 class="h5 form-text">AOA 25.000</h5>
                </div>
                <div class="dash__card terc">
                    <span class="title__card">Pessoas Pendentes</span>
                    <h5 class="h5 form-text">15.000k</h5>
                </div>
            </div>
        </div>
    </section>


</body>

</html>