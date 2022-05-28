<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
            break;
        case 'produtos':
            return (new App\Controller\ControllerProduto)->render();
            break;
        case 'administrador':
            return(new App\Controller\ControllerAdministrador)->render();
            break;
        case 'adicionar':
            return(new App\Controller\ControllerAdicionar)->render();
            break;
        case 'editarProduto':
            return(new App\Controller\ControllerEditarProduto)->render();
            break;
        case 'administradorLogin':
            return(new App\Controller\ControllerLoginAdministrador)->render();
            break;
        case 'criarConta':
            return(new App\Controller\ControlleCriarConta)->render();
            break;
    }
    
    return 'Página não encontrada!';
}
