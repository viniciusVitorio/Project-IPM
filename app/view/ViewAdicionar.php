<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewAdicionar extends ViewPadrao
{
    static function formularioLuva(){
        $sHtml ='
        <form class="form-group" method="POST" action="index.php?pg=administrador&act=insert" enctype="multipart/form-data">
            <h1>Adicionar Luva</h1>
            <input type="text" class="form-control" name="marca" placeholder="Marca"> 
            <input type="text" class="form-control" name="cor" placeholder="Cor"> 
            <input type="number" class="form-control" name="tamanho" placeholder="Tamanho"> 
            <input type="number" class="form-control" name="preco" placeholder="Preço"> </br>
            <input type="file" class="form-control" name="imagem"> </br>
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>
        ';
        return $sHtml;
    }
}