<?php
	session_start();
	$nome = $_POST['nome'];
	$sobnome = $_POST['sobnome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$_SESSION['nome'] = $nome;
	$_SESSION['sobnome'] = $sobnome;
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;

	if (isset($_SESSION['nome']) && isset($_SESSION['sobnome']) && isset($_SESSION['email']) && isset($_SESSION['senha'])) {
		echo "
			<script>

				alert("Cadastrado com sucesso!");
				location.href = "login.php";

			</script>

		";
	}else{
		echo "
			<script>

				alert("Falha ao Cadastar!");
				location.href = "login.php";

			</script>

		";
	}


?>