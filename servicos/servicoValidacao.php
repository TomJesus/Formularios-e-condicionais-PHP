<?php


function validaDados(string $nome, string $idade) : bool
{
    if(empty($nome) || empty($idade)){


        setarMensagemErro( 'Não pode haver campos vazios.');
        return false;
    }

    else if(strlen($nome) <3 || strlen($nome)>20)
    {
      setarMensagemErro('O nome deve conter entre 3 e 20 caractéres.');
        return false;
    }

    else
        if(!is_numeric($idade))
    {
        setarMensagemErro('O campo idade deve conter apenas numeros.');
        return false;
    }
        return true;
}


