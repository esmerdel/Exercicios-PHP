<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action = "" method = "post">
        <?php
            for($i = 0; $i < 7; $i++){
                echo '<input type = "number" name = "valores[]">';
            }

        ?>
        <button type = "submit"> Ok </button>
    </form>
    <?php
        if(isset($_POST)){                    //ISSET VERIFICA SE EXISTE A VARIAVEL
            if(isset($_POST['valores'])){
                $vetor = $_POST['valores'];
                var_dump($vetor);
            }

        }

    ?>
</body>
</html>