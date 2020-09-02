<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa();
            $p1->setNome("Pedro");
            $p1->setSexo("M");


            $p2 = new Aluno();
            $p2->setNome("Maria");
            $p2->setCurso("Informática");

            $p3 = new Professor();
            $p3->setNome("Cláudio");
            $p3->setSalario(2500.75);

            $p4 = new Funcionario();
            $p4->setNome("Fabiana");
            $p4->setSexo("F");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);


        ?>
    </pre>
</body>
</html>