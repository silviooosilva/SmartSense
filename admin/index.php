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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                                $sql = "SELECT * FROM cadastro";
                                                $validate_query = $pdo->query($sql);
                                                echo $validate_query->rowCount();
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



                    $sql = "SELECT * FROM cadastro";
                    $validate_query = $pdo->query($sql);
                    if ($validate_query->rowCount() > 0) {
                        while ($row = $validate_query->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['empresa'] . "</td>";
                            echo "<td>" . $row['plano'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td>Nenhum usuário cadastrado</td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </section>


</body>

</html>