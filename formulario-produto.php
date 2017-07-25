<?php include('cabecalho.php'); ?>

<form action="adiciona-produto.php" method="GET"> 
	<table class="table" >
		<tr>
			<td><output>Nome : </output></td>
			<td><input type="text" name="nome"></td>
		</tr>
		<tr>
			<td><output>Preço : </output></td>
			<td><input type="numeric" name="preco"></td>
		</tr>
		<tr>
			<td><output>Imagem : </output></td>
			<td><input type="text" name="imagem"></td>
		</tr>
			<td align="right">
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include('rodape.php'); ?>