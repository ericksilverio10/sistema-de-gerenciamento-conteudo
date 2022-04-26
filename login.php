<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Entrar</title>
</head>
<body>
    <div class="wrapper">
        <div class="login__container">
            <div class="logo">
                <a href="index.php" class="logo__link">
                    <img class= "logo__img" src="assets/logo_handspike.svg" alt="Logo">
                </a>
            </div>
            <h1 class="login__title">Entrar</h1>
            <form method="POST">
                <div class="form__group">
                    <input type="text" name="login" class= "form__input-text" id="input__login" placeholder="Login" required>
                    <i class="form__input-icon fas fa-user"></i>
                </div>
                <div class="form__group">
                    <input type="password" name="senha" class= "form__input-text" id="input__senha" placeholder="Senha" required>
                    <i class="form__input-icon fas fa-lock"></i>
                </div>
                <div class="submit">
                    <input type="submit" name="enviado" class= "form__input-submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>