<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InnOut - Login</title>
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    
    <form class="form-login" method="POST">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">InnOut</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Informe o e-mail" autofocus required>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Informe a senha" autofocus required>
                </div>
            </div>

            <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>

</body>
</html>