<?php

class Gast{

private $db;


function __construct($con){

$this->db = $con;

}





function GetAlleGasten(){

    $sql = "select * from gast";
    $statement = $this->db->prepare($sql);
    $statement->execute();

    $data = array();

    while($row =  $statement->fetchObject()){
        array_push($data,$row);
    }

    //print_r($data);

    return $data;

}



function ZoekGasten($naam){




    $sql = "select * from gast where Naam='$naam'";
    $statement = $this->db->prepare($sql);
    $statement->execute();

    $data = array();

    while($row =  $statement->fetchObject()){
        array_push($data,$row);
    }

    //print_r($data);

    return $data;

}


}


?>