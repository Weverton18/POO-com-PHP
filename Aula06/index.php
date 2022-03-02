<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Aula 06 - POO</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
        require_once 'ControleRemoto.php';
        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->maisVolume();
        $c1->abrirMenu();
    ?>
    </pre>
</body>
</html>