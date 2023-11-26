<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Listar Locais</title>
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
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM locais";
                    $res = $conn->query($sql) or die($conn->error);
                    $qtd = $res->num_rows;

                    if($qtd > 0){
                      print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
                      print "<table class='table table-striped table-hover'>";
                      print "<tr>";
                        print "<th>#</th>";
                        print "<th>Local</th>";
                        print "<th>Endereço</th>";
                        print "<th>CEP</th>";
                        print "<th>Cidade</th>";
                        print "<th>UF</th>";
                        print "<th>Ações</th>";
                        print "</tr>";
                      while($row = $res->fetch_object()){
                        print "<tr>";
                        print "<td>".$row->id."</td>";
                        print "<td>".$row->local_nome."</td>";
                        print "<td>".$row->endereco."</td>";
                        print "<td>".$row->cep."</td>";
                        print "<td>".$row->cidade."</td>";
                        print "<td>".$row->uf."</td>";
                        print "<td>
                                 <button class='btn btn-success' onclick=\"location.href='editarlocal.php?id=".$row->id."';\">Editar</button>
                                 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='salvarlocais.php?acao=excluirlocal&id=".$row->id."';}else{false;}\">Excluir</button>
                               </td>";
                        print "</tr>";
                      }
                      print "</table>";
                    }else{
                      print "<p>Nenhum resultado encontrado</p>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>