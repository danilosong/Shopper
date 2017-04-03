<?php  
//configurar apenas  a linha 3, no lugar do localhost e root colocar o login do banco e no espaco vazio a senha.
	$conn = mysqli_connect("localhost","root","");

	//fim da configuracao

	mysqli_select_db($conn,"shopper") or die (mysqli_error('Erro tente novamente'));
?>