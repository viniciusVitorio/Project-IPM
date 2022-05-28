<?php

namespace App\Controller;
session_start();
use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewAdministrador;
use App\Model\ModelAdministrador;
use app\client\Session;

use App\Db\Connection;

$logged = $_SESSION['userid'] ?? NULL;
if(!$logged) die ("Você precisa ser um administrador para acessar esta pagina! <a href='index.php?pg=administradorLogin'>Login</a>"); 

class ControllerAdministrador extends ControllerPadrao
{

    protected function processPage()
    {
        
        $oModelProduto = new ModelAdministrador;
        
        $a = $oModelProduto->getAll();

        $sTitle = 'Administrador';
        
        $sContent = ViewAdministrador::render([
            'tabelaProduto' => ViewAdministrador::getHTMLTabelaProdutos($a)

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
    
    function processDelete()
    {
        $id =  $_GET['proid'] ??= '';

        $oModelProduto = new ModelAdministrador;
        $oModelProduto->id = $id;

        $oModelProduto->deleteProduto();
        return $this->processPage();
    }



    protected function processInsert()
    {
        $marca = $_POST['marca'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem'];
        $imgdir = 'app/view/images';
        $imagemDestino = "$imgdir/" .$imagem['name'];
        move_uploaded_file($imagem["tmp_name"], $imagemDestino);

        $oModelProduto = new ModelAdministrador;

        $oModelProduto->marca = $marca;
        $oModelProduto->cor = $cor;
        $oModelProduto->tamanho = $tamanho;
        $oModelProduto->preco = $preco;
        $oModelProduto->imagemDestino = $imagemDestino;

        $oModelProduto->insertProduto();
        return $this->processPage();
    }

    protected function processUpdate()
    {
        $marca = $_POST['marca'];
        $id =  $_POST['id'];

        $oModelProduto = new ModelAdministrador;

        $oModelProduto->marca = $marca;
        $oModelProduto->id = $id;
        $oModelProduto->updateProduto();
        return $this->processPage();
        
    }
}
