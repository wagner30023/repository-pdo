<?php require_once './menu.php'; ?>

<header class="body">

    <h2 class="pesq"> Pesquisar </h2>

</header>

<section >
    <form  method="post" action="PesquisarAmigo.php">
        <input name="nome" placeholder=" Digite o nome, que vc deseja buscar">
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>

</section>
<?php require_once './footer.php'; ?>