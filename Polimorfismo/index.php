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
        // Esses são de sobreposição
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        // Esses são de sobrecarga
        require_once 'Arara.php';
        require_once 'Cobra.php';
        require_once 'Canguru.php';
        require_once 'Goldfish.php';
        require_once 'Cachorro.php';
        require_once 'Tartaruga.php';


        $m = new Mamifero();
        $m->setPeso(33.5);
        $m->locomover();

        $a = new Ave();
        $a->locomover();

        $r = new Reptil();
        $r->locomover();

        $p = new Peixe();
        $p->locomover();

        $c = new Cachorro();
        $c->emitirSom();

        $k = new Canguru();
        $k->emitirSom();

        ?>
    </pre>
</body>
</html>