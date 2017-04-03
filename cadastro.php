<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Shopper</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700);
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);

body {
    background: #fff;
	font-family: 'Roboto', sans-serif;
	color:#333;
	line-height: 22px;	
}
h1, h2, h3, h4, h5, h6 {
	font-family: 'Roboto Condensed', sans-serif;
	font-weight: 400;
	color:#111;
	margin-top:5px;
	margin-bottom:5px;
}
h1, h2, h3 {
	text-transform:uppercase;
}

input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 12px;
    cursor: pointer;
    opacity: 1;
    filter: alpha(opacity=1);    
}

.form-inline .form-group{
    margin-left: 0;
    margin-right: 0;
}
.control-label {
    color:#333333;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
		<!-- validar senha -->

function TestaSenha(valor) {
   var d = document.getElementById('seguranca');
   ERaz = /[a-z]/;
   ERAZ = /[A-Z]/;
   ER09 = /[0-9]/;
   ERxx = /[@!#$%&*+=?|-]/;

   if(valor.length == ''){
   } else {
      if(valor.length < 8){
         d.innerHTML = 'Seguranca da senha: <font color=\'red\'> BAIXA</font>';
} else {
            if (valor.length === 8 && valor.search(ERaz) !== - 1 && valor.search(ERAZ) !== - 1 && valor.search(ER09) !== - 1 || valor.length > 7 && valor.search(ERaz) !== - 1 && valor.search(ERAZ) !== - 1 && valor.search(ERxx) || valor.length > 7 && valor.search(ERaz) !== - 1 && valor.search(ERxx) !== - 1 && valor.search(ER09) || valor.length > 7 && valor.search(ERxx) !== - 1 && valor.search(ERAZ) !== - 1 && valor.search(ER09)){
    d.innerHTML = 'Seguranca da senha: <font color=\'green\'> ALTA</font>';
            } else {
            if (valor.search(ERaz) !== - 1 && valor.search(ERAZ) !== - 1 || valor.search(ERaz) !== - 1 && valor.search(ER09) !== - 1 || valor.search(ERaz) !== - 1 && valor.search(ERxx) !== - 1 || valor.search(ERAZ) !== - 1 && valor.search(ER09) !== - 1 || valor.search(ERAZ) !== - 1 && valor.search(ERxx) !== - 1 || valor.search(ER09) !== - 1 && valor.search(ERxx) !== - 1){
    d.innerHTML = 'Seguranca da senha: <font color=\'orange\'> MEDIA</font>';
            } else {
            d.innerHTML = 'Seguranca da senha: <font color=\'red\'> BAIXA</font>';
            }
            }
            }
   }
}

<!-- verificar as duas senhas -->

function validarSenha(){
	senha1 = document.formuser.senha_cad.value;
	senha2 = document.formuser.senha2_cad.value;
 
	if (senha1 === senha2)
		return true;
	else
		alert("SENHAS DIFERENTES");
                return false;
}
	</script>
</head>
<body>
<div class="container">
	<div class="row">
    <div class="col-md-8">
      <section>
        <h1 class="entry-title"><span>Cadastro</span> </h1>
        <hr>
        
       <!-- cadastro de email-->
           
            <form class="form-horizontal" name="formuser" enctype="multipart/form-data" action="inserir_cadastro.php" method="post" >        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="email_cad" id="email_cad" placeholder="Entre com Email" required>
            </div>
            <small> Seu E-mail está sendo usado para garantir a segurança de sua conta, autorização e recuperação de acesso. </small> </div>
        </div>
        
       <!-- cadastro de senha-->
        
        <div class="form-group">
          <label class="control-label col-sm-3">Senha <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="senha_cad" id="senha_cad" placeholder="Escolha senha (8 caracteres)" maxlength="8" minlength="8" onKeyUp="TestaSenha(this.value);" required>
           </div>
           <small><p id="seguranca"></p></small>
          </div>
        </div>
        
       <!-- cadastro de confirmacao de senha-->
        
        <div class="form-group">
          <label class="control-label col-sm-3">Confirma Senha <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="senha2_cad" id="senha2_cad" placeholder="Confirma a senha" maxlength="8" minlength="8" required>
            </div>  
          </div>
        </div>
        
        <!-- cadastro do nome-->
        
        <div class="form-group">
          <label class="control-label col-sm-3">Nome completo <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="nome_cad" id="nome_cad" placeholder="Entre com o nome" required="">
          </div>
        </div>
        
        <!-- cadastro de nascimento-->
        
		<div class="form-group">
    	<label class="control-label col-sm-3">Data de aniversário<span class="text-danger">*</span></label>
    		<div class="col-md-4 col-sm-9">
        	<input type="date" class="form-control" id="niver_cad" name="niver_cad" class="form-control input-md" placeholder="Data de aniversário" required>
    		</div>
		</div>
      
       <!-- cadastro de sexo-->
       
        <div class="form-group">
          <label class="control-label col-sm-3">Sexo <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="sexo_cad" id="sexo_cad" type="radio" value="M" checked>
            Masculino </label>
               
            <label>
            <input name="sexo_cad" id="sexo_cad" type="radio" value="F" >
            Feminino </label>
          </div>
        </div>
        
        <!-- cadastro de celular-->
        
        <div class="form-group">
          <label class="control-label col-sm-3">Celular <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="cel_cad" id="cel_cad" placeholder="Ex. 11999999999" maxlength="11" required>
            </div>
          </div>
        </div>
        
        <!-- cadastro de foto-->
        
        <div class="form-group">
          <label class="control-label col-sm-3">Foto de perfil<span class="text-danger">*</span><br></label>
          <div class="col-md-6 col-sm-8">
            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
              <input type="file" id="img_cad" name="img_cad" type="file" maxlength="1" aria-describedby="file_upload" required>
            </div>
          </div>
        </div>
        
		<!-- TERMOS -->
        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9">
          <input type="checkbox" name="term_cad" id="term_cad-0" value="1" required>
          <span class="text-muted"><span class="label label-danger">Atenção:</span> Eu concordo com os Termos de Uso, EULA e Política de Privacidade.</span> </div>
        </div>
        
        <!-- botao submit-->
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input class="btn btn-primary" id="cadastrar_cad" name="cadastrar_cad" type="submit" onClick="return validarSenha()">
            <button id="limpar_cad" name="limpar_cad" class="btn btn-default" type="reset">Limpar</button>
          </div>
        </div>
      </form>
    </div>
</div>
</div>
<script type="text/javascript">

</script>
</body>
</htm
