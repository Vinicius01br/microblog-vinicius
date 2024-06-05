<?php
require "inc/cabecalho.php";
require "inc/funcoes-sessao.php" ;
require "inc/funcoes-usuarios.php";

if(isset($_GET['campos_obrigatorios'])){
	$mensagem = "Preencha Email e senha";
}elseif(isset($_GET['dados_incorretos'])){
	$mensagem = "dados incorretos, verifique e tente novamente";

}elseif(isset($_GET['saiu'])){
	$mensagem = "Você saiu do sistema..até breve!";
	
}elseif(isset($_GET['acesso_negado']))
	$mensagem = "Você deve logar primeiro";


if(isset($_POST['entrar'])){
	//Validando os campos
	if(empty($_POST['email'])|| empty($_POST['senha'])){
		header("location:login.php?campos_obrigatorios");
		exit;
	}

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$usuario = buscarUsuario($conexao, $email);
	
	if($usuario !== null && password_verify($senha, $usuario["senha"]) ){
		//então, inicie o processo de login
		login($usuario['id'], $usuario['nome'], $usuario['tipo']);
		header("location:admin/index.php");
		exit;
		

	}else{
		
		header("location:login.php?dados_incorretos");
	}


}
?>

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
    <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">
				<?php if(isset($mensagem)){?>

				
				<p class="my-2 alert alert-warning text-center">
					<?=$mensagem?>
				</p>  
				<?php } ?>              

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

    </div>
    
    
</div>        

<?php 
require_once "inc/rodape.php";
?>

