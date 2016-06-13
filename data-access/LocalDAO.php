<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 19:43
 */
require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Local.php");

class LocalDAO extends DataAccessObject{

    public function getLocais($order_by){
        $locais = array();
        $query = "SELECT * FROM Localidade ORDER BY ".$order_by."";
        $rows = parent::query($query);
        foreach($rows as $row){
            $local = new Local();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }

}