<?php

namespace App\Model;

use App\Db\Connection;

class ModelConta extends ModelPadrao
{
    public $id;

    function getTable()
    {
        return 'loja.tbcontas';
    }

    function getColumns()
    {
        
    }

    function insertProduto()
    {
        $usuario = $this->usuario;
        $senha = $this->senha;

        return parent::insert([
            'tbusuario' => $this->getBdValue($usuario),
            'tbsenha' => $this->getBdValue($senha)
        ]); 
    }
}

