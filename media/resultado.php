<?php

session_start();

$nome = $_POST['nome'] ?? '';
$n1 = $_POST['n1'] ?? '';
$n2 = $_POST['n2'] ?? '';
$n3 = $_POST['n3'] ?? '';
$n4 = $_POST['n4'] ?? '';
$media_aprovacao = $_POST['media'] ?? '';

$_SESSION['nome'] = $nome;
$_SESSION['n1'] = $n1;
$_SESSION['n2'] = $n2;
$_SESSION['n3'] = $n3;
$_SESSION['n4'] = $n4;
$_SESSION['media'] = $media_aprovacao;

if (!isset($_POST['nome'], $_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['media'])) {
    die("Acesso inválido.");
}

$nome = htmlspecialchars($_POST['nome']);
$media_aprovacao = $_POST['media']; // Definindo a média de aprovação

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

$notas = [$n1, $n2, $n3, $n4];

foreach ($notas as $nota) {
    if ($nota < 0 || $nota > 10) {
        die("Notas devem estar entre 0 e 10.");
    }
}

$media = ($n1 + $n2 + $n3 + $n4) / 4;

if ($media >= $media_aprovacao) {
    $situacao = "Aprovado";
    $classe = "aprovado";
} else {
    $situacao = "Reprovado";
    $classe = "reprovado";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Resultado</title>

    <link rel="stylesheet" href="style2.css">

</head>

<body>

    <h2>Resultado</h2>

    <div class="container">
        <h3>Notas</h3>

        <ul>
            <li>Nota 1: <?php echo $n1; ?></li>
            <li>Nota 2: <?php echo $n2; ?></li>
            <li>Nota 3: <?php echo $n3; ?></li>
            <li>Nota 4: <?php echo $n4; ?></li>
            <li>Média de Aprovação: <?php echo $media_aprovacao; ?></li>
        </ul>


        <p><strong>Aluno:</strong> <?php echo $nome; ?></p>

        <p><strong>Média:</strong> <?php echo number_format($media, 2); ?></p>

        <p class="<?php echo $classe; ?>">
            <strong>Situação:</strong> <?php echo $situacao; ?>
        </p>

        <form action="notas.php" method="post">
            <button type="submit">Editar notas</button><br><br>
        </form>

        <form action="index.php" method="post">
            <button type="submit">Novo aluno</button>
        </form>

    </div>

</body>

</html>