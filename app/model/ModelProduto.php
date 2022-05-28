<?php

namespace App\Model;

use App\Db\Connection;

class ModelProduto extends ModelPadrao
{
    public $id;

    function getTable()
    {
        return 'loja.tbluvas';
    }

    function getColumns()
    {
        return 'marcaluva';
    }
}

