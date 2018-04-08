<?php
require "conexao.php";
?>
<style media="screen">
footer{
    position:fixed;
    left:0;
    bottom:0;
    height:30px;
    width:100%;
    background-color:#0066b3;
    color: white;
}
</style>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/jquery.mask.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/custom.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Inscricao</title>
    <link rel="shortcut icon" href="img/ico.png">
</head>
<body style="background-color:#eeeeee;">
    <div class="" align="center">
        <img src="img/logo1.jpg" alt="">
    </div>
    <h1 align="center">Inscrição de Participante</h1>
    <form class="form-group" action="salva.php" method="post">
        <div class="container col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input class="form-control" type="text" name="nome" value="" placeholder="Preencha Seu Nome Completo" required>

                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="" placeholder="Preencha seu E-mail"required>

                <label for="telefone">Telefone</label>
                <input id="fone" class="form-control" type="text" name="telefone" value="" placeholder="(0xx) 99999 - 9999" required>

                <label for="curso">Curso</label>
                <select class="form-control" name="curso" required>
                    <option value="">Selecione um curso</option>
                    <?php
                    $sql = "SELECT * FROM curso";
                    $cursos = mysqli_query($conexao,$sql);
                    while($dados = mysqli_fetch_array($cursos)){
                        echo "<option value='$dados[0]'>$dados[1]</option>";
                    }
                    ?>
                </select>

                <div class="" style="margin-top:10px;">
                    <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
                    <button class="btn btn-default" type="reset" name="limpar">Limpar</button>
            </div>
        </div>
    </form>
</div>
<!-- <div class="container col-md-12" align="center" style="background-color:black; color: white; float:left; width:100%;">
    <p>Ltda</p>
</div> -->
</body>
<footer class="py-5 bg-dark">
    <div class="container">
        <p align="center">Copyright &copy; Me, Myself & I 2018</p>
    </div>
    <!-- /.container -->
</footer>
</html>
