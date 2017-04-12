


<?php 
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$qtd = $_GET['qtd'];
	$desc = $_GET['descricao'];

	include("conexao.php");
	$sql = "INSERT INTO `produto`(nome,preco,qtd,descricao) VALUES ('$nome',$preco,$qtd,'$desc')";
	echo $sql;
	$consulta = mysqli_query($conexao,$sql);
	if(!$consulta){
		echo mysqli_errno($conexao);
	}else{
		header("Location:index.php?p=home");
	}

 ?>