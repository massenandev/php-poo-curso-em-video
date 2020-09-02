<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            $v = new Visitante();
            $v->setNome("Juvenal");
            $v->setIdade(22);
            $v->setSexo("M");
            print_r($v);

            $a = new Aluno();
            $a->setNome("Paula");
            $a->setSexo("F");
            $a->setIdade(44);
            $a->setMatricula(0004);
            $a->setCurso("Engenharia de Software");
            $a->pagarMens();
            print_r($a);

            $b = new Bolsista();
            $b->setNome("Jubileu");
            $b->setMatricula(22222);
            $b->setCurso("Curso");
            $b->setIdade(20);
            $b->pagarMens();
            $b->setBolsa(15.2);
            print_r($b);

        ?>
    </pre>
</body>
</html>