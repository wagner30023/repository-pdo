<?php require_once './menu.php';?>

        <header class="body">

            <h2 class="pesq"> Formulário de cadastro </h2>

        </header>

        <section class="body">


            <form method="post" action="CadastrarAmigo.php">
                
                
                <label>Nome</label>
                <input name="nome" placeholder="Seu Nome">

                
                <label>Telefone fixo </label>
                <input name="telefone_fixo" type="text" placeholder="Telefone fixo">
                
                <label>Telefone celular </label>
                <input name="telefone_celular" type="text" placeholder="Telefone celualar">            
                
                <label>Email</label>
                <input name="email" type="email" placeholder="Seu email">

                <label> Endereço </label>
                <input name="endereco" type="text" placeholder="Endereço">

                
                <input id="submit" name="submit" type="submit" value="Submit">

            </form>

        </section>

<?php require_once './footer.php';?>