<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Lutador.php";
            require_once "Luta.php";
            //$l = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l = array();
            $l[0] = new Lutador("Prettyboy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Deadcode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("Ufcobol", "Brasil", 37, 1.75, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            # $l[2]->status();
            # $l[3]->status();
            # $l[4]->status();
            # $l[5]->status();
            // a luta, de fato...
            $luta = new Luta();
            $luta->marcarLuta($l[4], $l[5]);
            $luta->lutar();
            //$l[0]->status();
            //$l[1]->status();


        ?>
    </pre>
</body>
</html>