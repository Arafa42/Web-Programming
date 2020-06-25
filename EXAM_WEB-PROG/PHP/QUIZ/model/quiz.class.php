<?php

class Quiz{

private $db;


function __construct($con){

$this->db = $con;

}



function GetVraag(){

    $sql = "select * from vragen where id=1";
    $statement = $this->db->prepare($sql);
    $statement->execute();

    $data =  $statement->fetchObject();
    #print_r($data);

    return "<h2>$data->vraag</h2>";


}


function GetAlleVragen(){

    $sql = "select * from vragen";
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