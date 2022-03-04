<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - POO</title>
</head>
<body>
    <?php
        require_once 'Cachorro.php';

        // $m = new Mamifero();
        // $m->emitirSom();

        // $l = new Lobo();
        // $l->emitirSom();

        $c = new cachorro();
        $c->reagirFrase("Olá");
        $c->reagirFrase("Vai Apanhar!");

        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);

        $c->reagirDono(true);
        $c->reagirDono(false);

        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);

    ?>
</body>
</html>