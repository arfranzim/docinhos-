<?php 
	include('conecta.php'); 

function insereProduto($conexao, $nome, $preco, $imagem){
	$query = "insert into produtos (nome, preco, imagem) values ('{$nome}', {$preco}, '{$imagem}')";
	return mysqli_query($conexao, $query);
}

function listaProduto($conexao){
	$query = "select * from produtos";
	return mysqli_query($conexao, $query);
}

 ?>