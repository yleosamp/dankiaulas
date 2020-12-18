<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    /*
    if(isset($_POST["acao"])){
        echo $_POST['nome'];
    }
    */
    if(isset($_POST["acao"])){
        foreach($_POST["valor"] as $key => $value){
            echo $key;
            echo '=>';
            echo $value;

            echo '<hr>';
        }
    }

    ?>
    <form method="post">
        <select name="nome"> 
            <option value="yleo">yleo</option>
            <option value="Guilherme">Guilherme</option>
        </select>
        <input type="checkbox" name="valor[]" value="10"/>10
        <input type="checkbox" name="valor[]" value="20"/>20
        <input type="checkbox" name="valor[]" value="30"/>30
        <input type="checkbox" name="valor[]" value="40"/>40
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</body>
</html>