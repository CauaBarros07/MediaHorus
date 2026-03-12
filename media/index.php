<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Informar Nome</title>

<link rel="stylesheet" href="style2.css">

</head>

<body>

<h2>Sistema de Média</h2>

<div class="container">

<form action="notas.php" method="post">

<label>Nome:</label>
<input type="text" name="nome" maxlength="50" required pattern="[A-Za-zÀ-ÿ\s]+">

<button type="submit">Próximo</button>

</form>

</div>

</body>
</html>