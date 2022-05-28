<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProduto extends ViewPadrao
{
    static function produtos(array $a){
      
      $sHtml = '';

      $sHtml .='

        <div class="tela-produtos">';

        foreach ($a as $s)
        {
          $sHtml .= '<div id="card" class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="" style="text-align:center">'. $s['marcaluva'] .'</h1>
            <img class="imagem-produtos" src="'. $s['luvaimagem'] .'">
            <h4 class="card-text" id="cor"> Cor: '. $s['luvacor'] .'</h4>
            <h4 class="card-text" id="tamanho"> Tamanho: '. $s['luvatamanho'] .' OZ</h4>
            <h4 class="card-text"> R$: '. $s['luvapreco'] .'</h4>
            <a href="#" id="botao" class="btn btn-primary">Adicionar ao carrinho</a>
          </div>
        </div>';
        }

      $sHtml .= '</div>';

      return $sHtml;
    }
}
