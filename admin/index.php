<?php
require_once('../app/config.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartAds | Admin</title>
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src='./assets/js/main.js'></script>
</head>

<body>
    <section class="over">
        <header class="header">
            <div class="content">
                <div class="container">
                    <a href="../_template/index.php">
                        <h3 class="header__title">SmartAds</h3>
                    </a>
                    <h3 class="h3 else">Admin - Painel</h3>
                </div>
                <div class="">
                    <span class="user__name"><?php echo "root"; ?></span>
                    <img src="../assets/img/avatar.svg" alt="Avatar Usuario" id="avatar__img">
                    <a href="./../_template/logout.php"><span class="out">Sair</span></a>
                </div>
            </div>
        </header>
    </section>
    <section class="dashboard">
        <div class="container">
            <div class="cards__dash">
                <div class="dash__card first">
                    <span class="title__card">Total de Úsuarios</span>
                    <h5 class="h5 form-text"><?php

$find = "SELECT * FROM cadastro";
$validate_find = mysqli_query($conn, $find);
echo mysqli_num_rows($validate_find);

?></h5>
                </div>
                <div class="dash__card sec">
                    <span class="title__card">Lucro Gerado Ads</span>
                    <h5 class="h5 form-text">AOA 125.000</h5>
                </div>
                <div class="dash__card terc">
                    <span class="title__card">Satisfação</span>
                    <h5 class="h5 form-text">10/10</h5>
                </div>
            </div>
        </div>
    </section>
<br><br><br><br>
    <section class="show_users_data">
        <div class="container">
        <table class="table table-striped">
  <thead> 
   <tr>
      <th scope="col">id</th>
      <th scope="col">Empresa</th>
      <th scope="col">Plano</th>
      <th scope="col">E-mail</th>
      <th scope="col">Criado em</th>
    </tr>
  </thead>
  <tbody>
  <?php



$query = "SELECT * FROM cadastro";
$validate_query = mysqli_query($conn, $query);

if (mysqli_num_rows($validate_query) <= 0) {

    echo "SEM USUARIOS CADASTRADOS!";
}
else {
    while ($data = mysqli_fetch_array($validate_query)) {

        echo "<tr>";
        echo "<th scope='row'>{$data['id']}</th>";
        echo "<td>{$data['empresa']}</td>";
        echo "<td>{$data['plano']}</td>";
        echo "<td>{$data['email']}</td>";
        echo "<td>{$data['created']}</td>";
        echo "</tr>";


    }

}
?>   
  </tbody>
</table>
        </div>
    </section>


</body>

</html>