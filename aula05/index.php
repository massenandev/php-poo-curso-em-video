<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
            require_once 'Conta.php';
            $p1 = new Conta();
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1111);
            $p1->depositar(300);
            $p1->pagarMensal();
            $p1->sacar(1000);
            $p1->sacar(338);
            $p1->fecharConta();
            print_r($p1);

            $p2 = new Conta();
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(2222);
            $p2->depositar(500);
            $p2->sacar(2000);
            $p2->sacar(100);
            $p2->pagarMensal();
            $p2->sacar(530);
            $p2->fecharConta();
            print_r($p2);


        ?>
    </pre>
</body>
</html>