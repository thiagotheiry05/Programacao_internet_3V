<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

    <h1>
        Bem-vindo,
        <?php echo ($_SESSION['nome']); ?>
    </h1>

    <p>Você está logado no sistema!</p>

    <a href="index.php?action=logout">
        Sair
    </a>

</body>
</html>