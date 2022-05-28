<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewEditarProduto;
use App\Model\ModelAdministrador;

use App\Db\Connection;

class ControllerEditarProduto extends ControllerPadrao
{
    protected function processPage()
    {        
        $oModelProduto = new ModelAdministrador;
        $id =  $_GET['proid'] ??= '';
        
        $a = $oModelProduto->getAll();

        $sTitle = 'Editar';
        
        $sContent = ViewEditarProduto::render([

            'inputEditar' => viewEditarProduto::getHTML($id)

        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5></h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );

    }
}
