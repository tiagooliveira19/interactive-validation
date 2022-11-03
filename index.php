<?php

    $msg = $_POST['msg'] ?? '';

?>

<!doctype html>
<html lang="pt">
<head>
    <?php include 'metas.php'; ?>
    <title>Validação Interativa</title>
</head>
<body>

    <div class="container-fluid">

        <div class="col-md-12 mt-5">

            <div class="col-md-4 margin-auto mt-7">

                <div class="txt-center">
                    <img src="images/user.svg" class="w-35" alt="signin-img" id="signin-img" >
                </div>

                <form class="mt-3" autocomplete="off" id="form-signin" action="index.php" method="post">

                    <input type="hidden" name="msg" value="sucesso">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-4">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" maxlength="8" required>
                        <div id="passHelp" class="form-text mb-3 hidden" style="color: #DC3545">A senha deve conter 8 caracteres!</div>
                    </div>

                    <div class="txt-center">
                        <button type="submit" class="btn btn-primary relative" id="btn-signin">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'scripts.php'; ?>
</body>
</html>
