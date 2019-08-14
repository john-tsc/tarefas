<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciador de tarefas</title>
</head>
<body>
<h1>Gerenciador de tarefas</h1>
<form>
	<fieldset>
		<legend>
			<label>
				Tarefa:
				<input type="text" name="nome">
			</label>
			<input type="submit" value="Cadastrar">			
		</legend>
	</fieldset>

<?php
	$lista_tarefas = array();
	if (isset($_GET['nome'])) {
		$lista_tarefas[] = $_GET['nome'];
	}
?>
</form>
<table>
	<tr>
		<th>Tarefas</th>
	</tr>

	<?php foreach ($lista_tarefas as $tarefa) : ?>
		<tr>
			<td><?php echo "$tarefa"; ?></td>
		</tr>
	<?php endforeach; ?>
</table>



</body>
</html>