<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta('Bic', 'Azul', 0.5);
            $c1->rabiscar();

            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} !!";
        ?>
    </pre>
</body>
</html>