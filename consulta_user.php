<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Busca de usuarios</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
	require 'conexao.php';
	$consulta_prod = mysqli_query($conn, "SELECT NOME, IMG, DATA_NASC, CELULAR, SEXO FROM cadastro;")
?>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.php">Início</a></div>
  </div>
  <!-- /.container-fluid --> 
</nav>
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="escolha_form">
<fieldset>

<!-- Nome do formulario -->
<legend align="center">Lista de usuários</legend>


<div class="form-group">
  <div class="col-md-4 col-lg-8 col-lg-offset-2">
  <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      <?php 

        while($consulta = mysqli_fetch_array($consulta_prod))
		{
	?>
    <!-- converter data -->

  <?php
$mes = date("m");
$ano = date("Y");
$dia = date("d");

$data  = $consulta['DATA_NASC'];
$teste = explode("-", $data); 
$ano1  = $teste[0];
$mes1  = $teste[1]; 
$dia1  = $teste[2];

if($mes == $mes1 && $ano == $ano1 && $dia == $dia1)
{
  $anob = $ano - $ano1;
}
else
{
  $anob = ($ano - $ano1)-1 ;
}

?>

<!-- converter sexo -->
<?php
$sexo = $consulta['SEXO'];

if($sexo == 'M')
{
  $sexo = 'Masculino';
}
else 
{
  $sexo = 'Feminino';
}

?>
      <option value="consulta">
      <?php
					echo 'Nome: ',$consulta['NOME'],'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp','Idade ', $anob,' Anos','&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp','Sexo: ', $sexo, '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp','Celular: ', $consulta['CELULAR'],'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				?>
      </option>
      <?php 
		}
      ?>
    </select>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
