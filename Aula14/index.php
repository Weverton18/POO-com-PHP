<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            // require_once 'Pessoa.php';

            $v[0] = new Video('Aula 01 de POO');
            $v[1] = new Video('Aula 12 de PHP');
            $v[2] = new Video('Aula 15 de HTML5');

            $g[0] = new Gafanhoto('Weverton', 20, 'M', 'We');
            $g[1] = new Gafanhoto('Milena', 20, 'F', 'Mia');


            // $p = new Pessoa('J', 22, 'M');
            // var_dump($p);

            var_dump($v);
            var_dump($g);
        ?>
    </pre>
</body>
</html>