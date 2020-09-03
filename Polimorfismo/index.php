<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php

        # Existem dois tipos de polimorfismo: sobreposição (override) e sobrecarga
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m1 = new Mamifero();
        $m1->setPeso(33.5);
        $m1->locomover();

        $a = new Ave();
        $a->locomover();

        $r = new Reptil();
        $r->locomover();

        $p = new Peixe();
        $p->locomover();
        ?>
    </pre>
</body>
</html>