<h2>Listagem de Produtos</h2>


<table>
	<thead>
		<th>id</th>
		<th>nome</th>
		<th>descriçao</th>
		<th>preço</th>
		<th>quantidade</th>
	</thead>
	<?php 
		include "conexao.php";

		// definindo a string da consulta SQL
		
		$sql = "SELECT * FROM produto";
		//Consultando
		
		$resultado = mysqli_query($conexao,$sql);
		//criando laço para cada resultado retornado como array associativo
		while ($produto= mysqli_fetch_assoc($resultado)) {
		
	 ?>
	<tr>
		<td><?=$produto["id"] ?></td>
		<td><?=$produto["nome"] ?></td>
		<td><?=$produto["descricao"] ?></td>
		<td><?=$produto["preco"] ?></td>
		<td><?=$produto["qtd"] ?></td>
	</tr>
	<?php 
		}
	 ?>
</table>



