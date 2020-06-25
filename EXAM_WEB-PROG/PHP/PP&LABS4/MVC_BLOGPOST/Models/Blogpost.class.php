<?php

class BlogPost{

function __construct($id,$newTit,$newBer,$newDat,$newUsernm){

$this->id = $id;
$this->title = $newTit;
$this->bericht = $newBer;
$this->datum = $newDat;
$this->username = $newUsernm;

}


public $id;
public $title;
public $bericht;
public $username;
public $datum;


}

?>