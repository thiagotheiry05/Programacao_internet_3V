<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

    <h1>
        Bem-vindo ao painel,
        <?php echo ($_SESSION['nome']); ?>
    </h1>

    <p>
        <a href="index.php?action=logout">Sair</a>
    </p>

</body>
</html>