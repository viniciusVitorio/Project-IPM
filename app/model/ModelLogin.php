<?php
namespace App\Model;
use App\Client\Session;
use App\Db\Connection;

class ModelLogin extends Session
{
    function getTable()
    {
        return 'loja.tbcontas';
    }

    function loginUsuario()
    {
        $oConnection = Connection::get();

        $usuario = $this->usuario;
        $senha = $this->senha;

        $oSelect = "SELECT * FROM ". $this->getTable() . " WHERE tbusuario = '" . $usuario . "' and tbsenha = '" . $senha . "' ";
        $oResult = pg_query($oConnection, $oSelect);

        $row = pg_num_rows($oResult);

        if($row == 1){
            return parent::login([
                'userid' => $usuario
            ]);
            }
        else
        {
            return "Usuario ou senha invalidos!";
        }
    }
}
