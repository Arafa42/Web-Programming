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


$repo = new Repository();

$repo->AddBlog("lala","bericht","2020/08/19","Afa");

$repo->AddBlog("po","ber","2020/08/19","Skafa");

$repo->ShowRepo();

echo $repo->SearchBlog("2");
echo $repo->SearchBlog("1");


?>

