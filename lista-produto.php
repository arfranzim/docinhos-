<?php 
	include('cabecalho.php');
	include('banco-produto.php'); 
?>
<table class="table table-striped">
	<tr> <!-- pula uma linha ! -->
			<td>Quitute</td>	 
			<td>Valor</td>
			<td>Detalhes</td>
		</tr>

<?php
$produtos = listaProduto($conexao);
foreach ($produtos as $produto) : ?>
		<tr>
			<td> <?= $produto['nome']; ?>  </td>
			<td> <?= $produto['preco']; ?> </td>
			<td><img src="<?= $produto['imagem']; ?>" height="45px" width="65px"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
<?php endforeach; ?>

</table>

<?php include('rodape.php') ?>