<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Caneta</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta;
            $c1->setModelo("BIC");
            $c1->setPonta(0.5);
            // print_r($c1);
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";

        ?>
    </pre>
</body>
</html>