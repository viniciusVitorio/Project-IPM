<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewEditarProduto extends ViewPadrao
{
    static function getHTML($id){
        $sHtml ='
        <form class="form-group" method="POST" action="index.php?pg=administrador&act=update">
                <input class="form-control" name="marca" placeholder="Editar marca"> </br>
                <input type="submit" class="btn btn-primary mb-2" value="Enviar">
                <input type="hidden" name="id" value='. $id .'>
       </form>
        ';
        return $sHtml;

    }
}
