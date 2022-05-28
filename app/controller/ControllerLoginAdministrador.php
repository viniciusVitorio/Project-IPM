<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewLoginAdministrador;
use App\Model\ModelLogin;


class ControllerLoginAdministrador extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'Login';

        $sContent = ViewLoginAdministrador::render([
           
            'loginAdministrador' => ViewLoginAdministrador::LoginAdministrador([])
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


    protected function processLogin()
    {
        $oModelLogin = new ModelLogin;

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $oModelLogin->usuario = $usuario;
        $oModelLogin->senha = $senha;

        $oModelLogin->loginUsuario();
        
        return header('location: index.php?pg=administrador');
    }    
}
