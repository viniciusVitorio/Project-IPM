<?php

namespace App\Model;

use App\Db\Connection;

class ModelAdministrador extends ModelPadrao
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

    function deleteProduto()
    {
        $id = $this->id;

        return parent::delete([
            'codluva' => $id
        ]);
        
    }
    function insertProduto()
    {
        $marca = $this->marca;
        $cor = $this->cor;
        $tamanho = $this->tamanho;
        $preco = $this->preco;
        $imagem = $this->imagemDestino;

        return parent::insert([
            'marcaluva' => $this->getBdValue($marca),
            'luvacor' => $this->getBdValue($cor),
            'luvatamanho' => $this->getBdValue($tamanho),
            'luvapreco' => $this->getBdValue($preco),
            'luvaimagem' => $this->getBdValue($imagem) 
        ]); 
    }

    function updateProduto()
    {
        $id = $this->id;
        $marca = $this->marca;
  /*    return parent::update([
         'codluva' => $id,
         'marcaluva' => $marca
        ]); */
    }
}
