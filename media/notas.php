<?php

session_start();

$nome = $_POST['nome'] ?? $_SESSION['nome'] ?? '';

$n1 = $_POST['n1'] ?? $_SESSION['n1'] ?? '';
$n2 = $_POST['n2'] ?? $_SESSION['n2'] ?? '';
$n3 = $_POST['n3'] ?? $_SESSION['n3'] ?? '';
$n4 = $_POST['n4'] ?? $_SESSION['n4'] ?? '';

$media_aprovacao = $_POST['media'] ?? $_SESSION['media'] ?? '';

if ($nome != '' && !preg_match("/^[A-Za-zÀ-ÿ\s]{1,50}$/", $nome)) {
    die("Nome inválido.");
}

$nome = htmlspecialchars($nome);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inserir Notas</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>Sistema de Média</h2>

<div class="container">

<h3>Aluno: <?php echo $nome; ?></h3>

<form action="resultado.php" method="post">

<input type="hidden" name="nome" value="<?php echo $nome; ?>">



<label>Nota 1</label>
<input type="number" name="n1" value="<?php echo $n1; ?>" min="0" max="10" step="0.1" required>

<label>Nota 2</label>
<input type="number" name="n2" value="<?php echo $n2; ?>" min="0" max="10" step="0.1" required>

<label>Nota 3</label>
<input type="number" name="n3" value="<?php echo $n3; ?>" min="0" max="10" step="0.1" required>

<label>Nota 4</label>
<input type="number" name="n4" value="<?php echo $n4; ?>" min="0" max="10" step="0.1" required>

<label>Media</label>
<input type="number" name="media" value="<?php echo $media_aprovacao; ?>" min="0" max="10" step="0.1" required>

<button type="submit">Calcular Média</button>

</form>

</div>

</body>
</html>