<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Projeto Controle Remoto</title>
</head>
<body>
    <pre>
        <?php
            /* Encapsulamento:
             * Ocultar partes independentes da implementação, permitindo
             * construir partes invisíveis ao mundo exterior. */

            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>