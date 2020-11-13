<?php
    error_reporting(E_ALL);
    // require "teste.php";
    // echo $var;
    // $var = 1;
    // if ($var == 1) {
    //     die("Script abortado");
    // } else {
    //     echo "TESTE";
    // }

    // echo "MAIS TESTE";

    try {
        $x = 4;
        $y = 3;

        $soma = $x + $y; //6
        if ($soma >= 7) {
            throw new Exception("A variavel soma não tem 6", 20);
        } else {
            echo "Deu tudo certo \o/";
        }
    }
    catch (Throwable $t) {
        //PHP 7
        echo "PHP 7<br>";
        echo $t->getMessage();
    } 
    catch (Exception $e) {
        //PHP 5
        echo "PHP 5<br>";
        echo $e->getMessage();
        //throw $th;
    }

    echo "Continua executando<br>";
  
    echo "<br><br><br>";

    try {
        $temp = 61;
        if ($temp >= 60) {
            throw new Exception("Vai EXPLODIR!!!!", 1);
        }
    }
    catch (Throwable $t) {
        //PHP 7
        echo "PHP 7<br>";
        echo $t->getMessage();
    }  
    catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br>SEMPRE EXECUTA FINALLY";
    }

    echo "<br><br><br>";
    echo "<br><br><br>";
    echo "<br><br><br>";
    echo "-------------- EXEMPLO var_dump ---------------";
    echo "<br><br><br>";
    $str = "Texto qualquer";
    var_dump($str);
    $valor = 10.1;
    var_dump($valor);
    echo "<br>";
    $vet = array(1,2,3,4,5,6,6,7,9,"teste", "1");
    var_dump($vet);


?>