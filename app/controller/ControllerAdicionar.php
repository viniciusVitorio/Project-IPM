<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewAdicionar;
use App\Model\ModelAdministrador;


class ControllerAdicionar extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Adicionar produto';

        $sContent = ViewAdicionar::render([
           
            'adicionarContent' => ViewAdicionar::formularioLuva([])
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Welcome!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    
}
