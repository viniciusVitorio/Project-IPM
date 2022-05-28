<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Model\ModelConta;
use App\Db\Connection;
use App\View\ViewCriarConta;

class ControlleCriarConta extends ControllerPadrao
{
    protected function processPage()
    {
        
        $oModelProduto = new ModelConta;
        
        $a = $oModelProduto->getAll();

        $sTitle = 'Criar conta';
        
        $sContent = ViewCriarConta::render([
            'criarContaConteudo' => ViewCriarConta::formularioConta($a)

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

    protected function processInsert()
    {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $oModelCriar = new modelConta;

        $oModelCriar->usuario = $usuario;
        $oModelCriar->senha = $senha;

        $oModelCriar->insertProduto();
        
        header('location: index.php?pg=');
    }

}
