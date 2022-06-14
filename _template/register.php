<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartAds | Adesãos</title>
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="../_template/">
                <h3 class="header__title h3">SmartAds</h3>
            </a>
            <h3 class="h3 else">Adesão ao Serviço</h3>
        </div>
    </header>

    <section class="infos">
        <div class="container">
            <?php
            if (isset($_SESSION['empty__error'])) :
            ?>
                <div class="alert alert-danger al" role="alert">
                    <?php
                    if (isset($_SESSION['empty__error'])) {
                        echo $_SESSION['empty__error'];
                        unset($_SESSION['empty__error']);
                    }
                    ?>
                </div>
            <?php
            endif;
            ?>
            <?php
            if (isset($_SESSION['email__error'])) :
            ?>
                <div class="alert alert-danger al" role="alert">
                    <?php
                    if (isset($_SESSION['email__error'])) {
                        echo $_SESSION['email__error'];
                        unset($_SESSION['email__error']);
                    }
                    ?>
                </div>
            <?php
            endif;
            ?>
        </div>




        <?php
        if (isset($_SESSION['error_senha'])) :
        ?>
            <div class="alert alert-danger al" role="alert">
                <?php
                if (isset($_SESSION['error_senha'])) {
                    echo $_SESSION['error_senha'];
                    unset($_SESSION['error_senha']);
                }
                ?>
            </div>
        <?php
        endif;
        ?>
        </div>



        <?php
        if (isset($_SESSION['sucess'])) :
        ?>
            <div class="alert alert-success al" role="alert">
                <?php
                if (isset($_SESSION['sucess'])) {
                    echo $_SESSION['sucess'] . "<a href='./home.php'class='ap'>Acessar Painel Administrativo </a>";
                    unset($_SESSION['sucess']);
                }
                ?>
            </div>
        <?php
        endif;
        ?>
        </div>

    </section>

    <main>
        <section class="home">
            <div class="container">
                <form action="../app/server.php" method="POST" class="row g-3" novalidate>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Max. 16 Caracters" maxlength="16" name="senha">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Nome da sua empresa</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Instituto Médio Politécnico SmartBits" name="empresa">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Link da sua página</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="https://facebook.com/IMP.SmartBits" name="link_page">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Titúlo do anúncio</label>
                        <input type="text" class="form-control" id="inputCity" name="anuncio__title">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="inputCity" name="descricao">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Tipo de divulgação</label>
                        <select id="inputState" class="form-select" name="planos">
                            <option selected value="basico" name="basico">Basico (30.000 kzs)</option>
                            <option value="platina" name="platina">Platina (90.000 kzs)</option>
                            <option value="super" name="super">Super (120.000 kzs)</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputZip" class="form-label">Número de Telefone</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="(+244) 940989200">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary bt-fma" name="btn-submit" value="Aderir">Aderir ao Serviço</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

</body>

</html>