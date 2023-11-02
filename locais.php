<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro de Locais</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="voluntarios.php">Cadastrar Voluntários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listarvoluntarios.php">Listar Voluntários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compromissos.php">Cadastrar Compromissos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listarcompromissos.php">Listar Compromissos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="locais.php">Cadastrar Locais</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listarlocais.php">Listar Locais</a>
          </li>
        </ul>
      </div>
        <div class="ml-auto">
            <a class="btn btn-danger" href="logout.php">Sair</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="salvarlocais.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrarlocal">
                    <div class="form-group">
                        <label>Local</label>
                        <input type="text" name="local_nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" name="cep" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" name="cidade" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" name="uf" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>