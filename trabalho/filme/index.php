<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; 
require_once "../template/menu.php";
?>

  <div class="container">
        <h1>Filmes</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Registrar filme
            </a>
        </div><br>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Diretor</th>
                <th scope="col">Ano</th>
                <th scope="col">Gênero</th>
                <th scope="col">Foto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($filmes as $filme){ ?>
            <tr>
                <th scope="row"><?php echo $filme['titulo']; ?></th>
                <td><?php echo $filme['diretor']; ?></td>
                <td><?php echo $filme['ano']; ?></td>
                <td><?php echo $filme['genero']; ?></td>
                <td><img src="../uploads/<?php echo $filme['foto']; ?>" height="30px" alt=""></td>

                <td>
                  <a href="excluir.php?id=<?php echo $filme['idfilme']; ?>" class="btn btn-danger">
                  <i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $filme['idfilme']; ?>" class="btn btn-primary">
                  <i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
  </div>
  <?php require_once "../template/rodape.php"; ?>