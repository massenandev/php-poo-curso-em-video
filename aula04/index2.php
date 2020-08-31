<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
        require_once 'Caneta2.php';

        $c1 = new Caneta2("BIC", "Azul", 0.5);
        $c2 = new Caneta2("KKK", "Verde", 0.2);
        print_r($c1);
        print_r($c2);

        ?>
    </pre>
</body>
</html>