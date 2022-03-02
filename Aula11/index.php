<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $a = new Aluno('Pedro', 16, 'M');
            $a->setMatricula(1111);
            $a->setCurso('Informática');
            $a->PagarMensalidade();
            var_dump($a);

            $b = new Bolsista('Weverton', 20, 'M');
            $b->setMatricula(1112);
            $b->setBolsa(40);
            $b->setCurso('Ciencias da Computação');
            $b->PagarMensalidade();
            var_dump($b);

            // $v = new Visitante();
            // $v->setNome('Juvenal');
            // $v->setIdade(33);
            // $v->setSexo('M');
            // $p = new Pessoa();
        ?>
    </pre>
</body>
</html>