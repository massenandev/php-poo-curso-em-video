<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "M");

            $l[0] = new Livro("PHP básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria da Silva", 500, $p[0]);
            $l[2] = new Livro("PHP avançado", "Ana Paula", 800, $p[1]);

            $l[0]->abrir();
            print_r($l[0]);
            $l[0]->folhear(5);
            $l[0]->avancarPag();
            $l[0]->detalhes();
            $l[1]->detalhes();
            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>