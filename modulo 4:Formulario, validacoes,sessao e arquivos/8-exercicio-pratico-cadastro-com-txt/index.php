<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de nomes</title>
</head>
<body>
    <form action="recebedor.php" method="POST">
        <label>
            Novo nome:
            <br>
            <input require type="text" name="nome">
        </label>
       
        <input type="submit" value="Adicionar">
    </form>

    <h1>Lista de nomes</h1>
    <?php
    $nomes = htmlspecialchars(file_get_contents("nomes.txt"));
    $nomes = explode("\n", $nomes);

    echo "<ul>";
    foreach($nomes as $nome) {
        echo "<li>".$nome."</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
