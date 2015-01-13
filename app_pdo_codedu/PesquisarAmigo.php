<?php require_once './menu.php'; ?>

<h2 class="pesq" > Resultado da pesquisa </h2>

<table align='center' width='50%' border='1px'>
    <thead>
        <tr>  
            <th> Nome </th>
            <th> Telefone fixo </th> 
            <th> Telefone celular </th>
            <th> Email </th>
            <th> Endereço </th>
            <th colspan="2">  Opção  </th>
        </tr>
    </thead>
    <?php
    require_once './lib/Amigo.class.php';
    require_once './lib/AmigoDAO.php';

    $pesquisar = new Amigo();
    $pesquisar->setNome($_POST['nome']);


    $resultado = AmigoDAO::FetchAll($pesquisar->getNome());

    foreach ($resultado as $dados):
        echo "
                          
                                <tbody>
                                <tr>
                                    <td>{$dados['nome']}</td>
                                    <td>{$dados['telefone_fixo']}</td>
                                    <td>{$dados['telefone_celular']}</td>
                                    <td>{$dados['email']}</td>
                                    <td>{$dados['endereco']}</td>
                                    <td><a href='#'> Editar </a></td>
                                    <td><a href='#'> Deletar </a></td>
                               </tr>
                               </tbody>
                        ";


    endforeach;
    ?>
</table>
<?php require_once './footer.php'; ?>
