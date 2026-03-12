<?php

session_start();

session_unset();   // remove dados da sessão
session_destroy(); // destrói sessão
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Informar Nome</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>Sistema de Média</h2>

<div class="container">

<form action="notas.php" method="post">

<div class="box">
    <label>Nome:</label>
    <input type="text" name="nome" maxlength="50" required pattern="[A-Za-zÀ-ÿ\s]+">

    <button type="submit">Próximo</button>
</div>

</form>

</div>

</body>
</html>