<?php
namespace App\Model;
session_start();
if(session_destroy()){
    header('header: administrador');
}
use App\Client\Session;
use App\Db\Connection;

class ModelLogout extends Session
{
    function getTable()
    {
        return 'loja.tbcontas';
    }

    
}

