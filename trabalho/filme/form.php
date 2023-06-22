    <?php require_once "consultar_por_id.php"; ?>
    <?php require_once "../template/cabecalho.php"; ?>
<div class="container">
    <h1>Cadastro de Filme</h1>
    <hr>

    <form action="<?php echo isset($filme) ? "atualizar.php" : "inserir.php";?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="idfilme" id="idfilme" value="<?php echo $filme['idfilme'] ?? "" ;?>"><br>

    <label for="titulo">Título:</label><br>
    <input type="text" name="titulo" id="titulo" value="<?php echo $filme['titulo'] ?? "" ;?>"><br>

    <label for="diretor">Diretor(a):</label><br>
    <input type="text" name="diretor" id="diretor" value="<?php echo $filme['diretor'] ?? "" ;?>"><br>

    <label for="ano">Ano:</label><br>
    <input type="text" name="ano" id="ano" value="<?php echo $filme['ano'] ?? "" ;?>"><br>

    <label for="genero">Gênero:</label><br>
    <input type="text" name="genero" id="genero" value="<?php echo $filme['genero'] ?? "" ;?>"><br>

    <label for="foto">Foto:</label><br>
    <input type="file" name="foto" id="foto"><br><br>

    <button type="submit">Registrar</button>

    </form>
</div>
    <?php require_once "../template/rodape.php"; ?>