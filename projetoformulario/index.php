<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($login == "ETEC" && $senha == "etec")
    {
        echo '<h1 style="text-align: center; margin-top: 60px;">Preencha o Formulário</h1><br>';
        echo '
        <form action="form.php" method="post" style="text-align: center; margin-top: 60px;">
        Digite o Título:<br> <input type="text" name="tema" id=""><br>
        Digite o conteúdo: <br><textarea rows= "30" cols= "40" maxLength= "1000" name="conteudo" ></textarea><br>
        Digite o nome do autor:<br> <input type="text" name="autor" id=""><br>
        <br>
        <input type="submit" value="Enviar">
        </form>';
    }
    else {
        echo "Login ou Senha estão incorretos!!!";
    }
    ?>
</body>
</html>



