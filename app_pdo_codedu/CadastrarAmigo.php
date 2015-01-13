<?php require_once './menu.php'; ?>

<header class="body">

    <h2> Formulário de cadastro </h2>

</header>

<section class="body">

    <?php
    require_once './lib/Amigo.class.php';
    require_once './lib/AmigoDAO.php';

    $amigos = new Amigo();
    $amigos->setIdamigos(NULL);
    $amigos->setNome($_POST['nome']);
    $amigos->setTelefone_celular($_POST['telefone_celular']);
    $amigos->setTelefone_fixo($_POST['telefone_fixo']);
    $amigos->setEmail($_POST['email']);
    $amigos->setEndereco($_POST['endereco']);

    $cadastrar = AmigoDAO::Insert($amigos);

    if ($cadastrar == TRUE) {
        echo "Cadastro efetuado com sucesso";
    } else {
        echo "houve algum erro ao tentar cadastrar o amigo";
    }
    ?>

</section>
<?php require_once './footer.php'; ?>