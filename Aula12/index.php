<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            // require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';

            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();

            $m->emitirSom();
            $k->emitirSom();
            $c->emitirSom();

            // $m->locomover();
            // $c->locomover();
            // $k->locomover();
            // $t->locomover();

            // $m->setPeso(32.5);
            // $m->locomover();

            // $r = new Reptil();
            // $r->locomover();

            // $a = new Ave();
            // $a->locomover();

            // $a = new Animal;
        ?>
</body>
</html>