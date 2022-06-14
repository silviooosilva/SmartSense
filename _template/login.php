<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SmartAds</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header class="header">
        <div class="container">
            <a href="../_template/">
                <h3 class="header__title h3">SmartAds</h3>
            </a>
            <h3 class="h3 else">Login</h3>
        </div>
    </header>
    <main>
        <section class="body-form">
            <form action="../app/login.php" method="post" class="form" novalidate>


                <div id="form">
                    <h3 class="fm__text h2">Welcome!</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">As suas informações estão seguras connosco!</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" maxlength="16">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep Me On</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn" value="login">Login</button>
                </div>
            </form>

            <div class="alerts">
                <?php

                if (isset($_SESSION['error'])) :
                ?>
                    <div class="alert alert-danger ad">

                        <?php

                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>

            <div class="alerts">
                <?php

                if (isset($_SESSION['error_password'])) :
                ?>
                    <div class="alert alert-danger ad">

                        <?php

                        echo $_SESSION['error_password'];
                        unset($_SESSION['error_password']);
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>

            <div class="alerts">
                <?php

                if (isset($_SESSION['error_email'])) :
                ?>
                    <div class="alert alert-danger ad">

                        <?php

                        echo $_SESSION['error_email'];
                        unset($_SESSION['error_email']);
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>

            </p>
            <div class="alerts">
                <?php

                if (isset($_SESSION['not_found'])) :
                ?>
                    <div class="alert alert-danger ad">

                        <?php

                        echo $_SESSION['not_found'] . " -    " . "<a href='./register.php'>Não Possui Uma conta?</a>";
                        unset($_SESSION['not_found']);
                        ?>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </section>
    </main>
</body>

</html>