<?php include 'top.php'; ?>
    <p>MNEMOSINEHTML Test</p>
	</br>
	<div>
	Buscador Basico
	<form action='buscarB.php' method="post">
	<input type="text" name="BarraBasica" value="">
	<select name="Campo">
		<option value="A">Todos</option>
		<option value="N">Nombre</option>
		<option value="T">Titulo</option>
		<option value="E">Editorial</option>
	</select>
	<input type="submit" value="Buscar">
	</form>
	</div>
	</br>
	<div><a href='buscadoravanzado.php'>Buscador Avanzado</a></div>
<?php include 'botton.php'; ?>