<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo ao SGPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centraliza vertical e horizontalmente -->
            <div class="col-md-6">
                <!-- Conteúdo do formulário de login -->
                <div class="login-container mt-5 mx-auto">
                    <form action="login_config.php" method="POST">
                    <h3 class="text-center">Login</h3>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Imagem à direita -->
                <div class="login-image" style="background-image: url('sgpdlogin.png'); background-size: cover; height: 100vh;"></div>
            </div>
        </div>
    </div>
</body>
</html>


