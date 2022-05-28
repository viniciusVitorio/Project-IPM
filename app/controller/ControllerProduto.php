<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewAdministrador;
use App\Model\ModelAdministrador;

use App\Db\Connection;
use App\View\ViewProduto;

class ControllerProduto extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto = new ModelAdministrador;

        $a = $oModelProduto->getAll();
        $row_marcas = $oModelProduto->getAll();
        $oResult = $oModelProduto->getAll();
        
        $sTitle = 'Produtos';
        
        $sContent = ViewProduto::render([

            'tabelaProduto' => ViewProduto::produtos($a, $row_marcas, $oResult)

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
