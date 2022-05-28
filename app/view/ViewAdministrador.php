<?php

namespace App\View;
use app\client\Session;
use App\View\ViewPadrao;

class ViewAdministrador extends ViewPadrao 
{

    static function getHTMLTabelaProdutos(array $a){
        $sHtml ='
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Marca</th>
                <th scope="col">Cor</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Preço</th>
                <th scope="col">Imagem</th>
              </tr>
            </thead>

            <tbody>
        ';

        foreach($a as $x)
        {
          $sHtml .= '
          <tr>
            <td>'. $x['codluva']. '</td>
            <td>'. $x['marcaluva']. '</td>
            <td>'. $x['luvacor']. '</td>
            <td>'. $x['luvatamanho']. ' OZ</td>
            <td> R$ '. $x['luvapreco'].'</td>
            <td>'. $x['luvaimagem'].'</td>
            <td><a href="index.php?pg=editarProduto&act=edita&proid='. $x['codluva'] . ' "><i class="fa-solid fa-pencil"></i></a></td>
            <td><a href="index.php?pg=administrador&act=delete&proid=' . $x['codluva'] . ' "><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          ';
        }    
        
        return $sHtml;
      
    }
}
