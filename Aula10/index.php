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
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa('Pedro',19,'M');
            $p2 = new Aluno('Maria',20,'F');
            $p3 = new Professor('Cláudio', 21, 'M');
            $p4 = new Funcionario('Fabiana', 18, 'F');

            $p2->setCurso('Informática');
            $p3->setSalario(2500.75);
            $p4->setSetor('Estoque');

            $p1->setSexo('M');
            $p4->setSexo('F');

            $p3->ReceberAum(550.20);
            $p4->mudarTrabalho();
            $p2->CancelarMatr();

            var_dump($p1);
            var_dump($p2);
            var_dump($p3);
            var_dump($p4);
        ?>
    </pre>
</body>
</html>