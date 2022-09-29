<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
</head>
<body style="display: 'flex'; flex-direction: 'column'; align-items: 'center';">
    <img src="https://cdn.awsli.com.br/600x1000/761/761999/produto/1482058586e9ba7b002.jpg" alt="Sticker Man fazendo um jóinha" style="width: 150px; margin-top: 5px; margin-button: 10px;" >
    <?php
        echo '<br>'.'Tema:'.$_POST["tema"];
        echo '<br>'.'Conteúdo:'."<p>".$_POST["conteudo"]."</p>";
        echo '<br>'.'Autor:'.$_POST["autor"];
    
    ?>
</body>
</html>