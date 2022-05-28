<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewCriarConta extends ViewPadrao
{
    static function formularioConta()
    {
        $sHtml = '
                
                <form action="index.php?pg=criarConta&act=insert" method="post">
                    <div class="form-group">
                        <h1>Criar conta</h1>
                        <input class="form-control" name="usuario" type="text" placeholder="Usuario"> <br>
                        <input class="form-control" name="senha" type="password" placeholder="senha"> <br>
                        <input type="checkbox" name="adm" class="form-check-input"> Administrador <br> <br>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
        ';

        return $sHtml;
    }
}
