<?php

include_once  "Models/Blogpost.class.php";

class Repository{

private $i=0;
private $blogs;

function __construct(){
$this->blogs = array();
}

    

function AddBlog($tit,$ber,$dt,$usr){

    $posts = new BlogPost($this->i,$tit,$ber,$dt,$usr);
    array_push($this->blogs,$posts);
    $this->i++;
}



function SearchBlog($id){

foreach ($this->blogs as $pst) {
    if($pst->id == $id){
        return  "id : " . $pst->id . "<br>title:" .$pst->title . "<p>";
    }
}
return "not found<p>";
}


function ShowRepo(){
    foreach ($this->blogs as $pst) {
        echo "id : ". $pst->id  ."<br>title:". $pst->title . "<p>";
    }
}


}


?>