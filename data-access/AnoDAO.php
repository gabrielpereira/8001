<?php



require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Ano.php");

class AnoDAO extends DataAccessObject{

    public function getAno($order_by){
        $locais = array();
        $query = "SELECT * FROM Ano ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Ano();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirAno($local){
        $query = "INSERT INTO Ano (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

