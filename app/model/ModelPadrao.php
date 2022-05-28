<?php

namespace App\Model;

use App\Db\Connection;
use App\Client\Session;

abstract class ModelPadrao
{
    abstract function getTable();
    abstract function getColumns();
    
    function getAll()
    {
        
        $oConnection = Connection::get();

        $oSelect = "SELECT * FROM ". $this->getTable();

        $oResult = pg_query($oConnection, $oSelect);
    

        $aData = [];

        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }

        return $aData;
    }

    protected function insert($aValues)
    {
        $oConnection = connection::get();
        
        $sSQL = 'insert into ' . $this->getTable(). ' (' . implode(',', array_keys($aValues))  . ') values ('. implode(',', array_values($aValues)) .')';
        ;

    //  var_dump($sSQL);

        return pg_query($oConnection, $sSQL);
    }

    protected function delete($aWhere)
    {
        $oConnection = Connection::get();
        
        $sSQL = ' 
            delete from ' . $this->getTable(). ' where 1=1
            ';
        
        foreach($aWhere as $sNomeColuna => $sValor){
            $sSQL .= ' and ' . $sNomeColuna . ' = ' .$sValor;
        }

        return pg_query($oConnection, $sSQL);
    }

    protected function update($aValues, $aWhere)
    {
        $oConnection = Connection::get();

        foreach($aWhere as $sNomeColuna => $sValor){
            
        }
    }

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue)
    {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }

            return $xValue;
        }

        return 'NULL';
    }


}
