<?php
    include_once "../template/cabecalho.php";
    include_once "../filme/consultar_todos.php";
?>

     <!--Inicio do Menu-->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item">
          <a class="nav-link active" href="../filme/index.php">
            Registro de Filmes 
          </a>
        </li>

        <?php 
          foreach($filmes as $key => $filme):?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?genero=<?= $filme["genero"]; ?>"><?= $filme["genero"]; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
     <!--Final do Menu-->
<hr>
     <!--Lista de filmes-->
     <div class="container">
        <div class="row row-cols-4 g-4">

        <?php foreach($filmes as $key => $filme): ?>
          <div class="col">
            <div class="card">
              <img src="../uploads/<?php echo $filme['foto']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $filme["titulo"]; ?></h5>
                <p class="card-text">
                Diretor(a): <?php echo $filme["diretor"] ?> <br>
                Ano: <?php echo $filme["ano"] ?> <br>
                Gênero: <?php echo $filme["genero"] ?></p>
            </div>
          </div>  
          </div>
      <?php endforeach ?>

          </div>
            </div>
     <!--Final da Lista de filmes-->

<hr>

<?php
    include_once "../template/rodape.php";
?>