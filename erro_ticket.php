<?php

//Recebendo o Ticket da pagina anterior
    if(!empty($numero_chamado)){
        $numero_chamado = $_POST['numero_chamado'];
    }
    //Conexão ao Banco
    include_once __DIR__.'/conexao.php';

    //Pesquisa no banco as informações completas do chamado
    $pesquisa_chamado = "SELECT * FROM glpi_consult_website WHERE ticket = '$numero_chamado' AND categoria like 'INFRAESTRUTURA > EQUIPAMENTO BANCADA%'";
    $resultado_chamado = mysqli_query($conn, $pesquisa_chamado);
    $row_chamado = mysqli_fetch_assoc($resultado_chamado);


    
    //Verificar se o Ticket é valido ou da bancada
    if(empty($row_chamado)){
        $mensagem_alerta = "<div class='alert alert-danger' role='alert'>O chamado inserido, não existe ou não pertece a categoria bancada</div>";
    }else{
    }


?>