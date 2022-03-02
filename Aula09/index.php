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
            require_once 'Livro.php';

            $p[0] = new Pessoa('Weverton', 20, 'M');
            $p[1] = new Pessoa('Ana Carolina', 18, 'F');

            $l[0] = new Livro('Percy Jacson e os Olimpianos', 'Rick Riordan', 300, $p[1]);
            $l[1] = new Livro('Do mil ao Milhão', 'Thiago Nigro', 190, $p[0]);
            $l[2] = new Livro('Pai rico, Pai pobre', 'Robert Kiyosaki', 1620, $p[0]);


            $l[0]->abrir();
            $l[0]->folhear(500);
            // $l[0]->avancarPag();
            $l[0]->voltarPag();
            $l[0]->detalhes();

            $l[1]->detalhes();
            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>