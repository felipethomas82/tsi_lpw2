<?php

    // $_POST não vazio? 
    if(!empty($_POST)) {
        if ($_POST['tipo'] == "gravar") {
            //criem suas rotinas de gravar no BD
            // simula um retorno ao front
            $cli = array();
            $cli['id'] = 30;
            $cli['nome'] = $_POST['nome'];
            $cli['sobrenome'] = $_POST['sobrenome'];
            $cli['idade'] = $_POST['idade'];

            echo json_encode($cli);
        }   
    } else {
        // simula uma chamada ao BD e monta um array clientes
        $clientes = array();
        for ($i=0; $i < 10; $i++) { 
            # code...
            $cli = array();
            $cli['id'] = $i;
            $cli['nome'] = "Fulano";
            $cli['sobrenome'] = "Thomas";
            $cli['idade'] = $i * 5;
            array_push($clientes, $cli);
        }
    
        echo json_encode($clientes);
    }
?>
