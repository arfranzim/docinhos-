<?php 
	include('banco-produto.php'); 

$nome  = $_GET['nome'];
$preco = $_GET['preco'];
$imagem = $_GET['imagem'];
insereProduto($conexao, $nome, $preco, $imagem);

 ?>