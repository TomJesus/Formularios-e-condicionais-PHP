<?php

session_start();

$categorias = [];
$categorias[] ='infantil';
$categorias[] ='adolescente';
$categorias[] ='adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if(empty($nome) || empty($idade)){


    $_SESSION['mensagem-de-erro'] = 'Não pode haver campos vazios.';
    header('location: index.php');
    return;
}

else if(strlen($nome) <3 || strlen($nome)>20)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter entre 3 e 8 caractéres.';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] ='O campo idade deve conter apenas numeros.';
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <= 12){

    for ( $i = 0; $i <= count($categorias); $i ++ ){

        if($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria ". $categorias[$i];
            header('location: index.php');
            return;
        }
    }

} else if ($idade >= 13 && $idade <= 18){

    for ( $i = 0; $i <= count($categorias); $i ++ ){

        if($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria ". $categorias[$i];
            header('location: index.php');
            return;
        }
    }

}else{

    for ( $i = 0; $i <= count($categorias); $i ++ ){

        if($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome ." compete na categoria ". $categorias[$i];
            header('location: index.php');
            return;
        }
    }

}
