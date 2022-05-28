<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewLoginAdministrador extends ViewPadrao
{
    static function LoginAdministrador(){
            $sHtml = '
                <form class="form-group" method="POST" action="index.php?pg=administradorLogin&act=login">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" >
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                    <input type="submit" class="btn-primary btn" value="Entrar">
                <form>
                
                <a href="index.php?pg=criarConta">Crie sua conta!</a>
            ';
            return $sHtml;
    }
}


