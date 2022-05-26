<?php

namespace App\Models;

class Projet 
{
    private $id;
    private $titre;
    private  $prix;
    private  $description;
    private  $date;
    public function __construct($id , $titre,$prix,$description,$date)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->prix=$prix;
        $this->description=$description;
        $this->date=$date;

    }
    public function getid(){return $this->id;}
    public function setid($id){return $this-> id=$id;}

    public function gettitre(){return $this->titre;}
    public function settitre($titre){return $this->titre=$titre;}

    public function getprix(){return $this->prix;}
    public function setprix($prix){return $this->prix=$prix;}
   
    public function getdescription(){return $this->description;}
    public function setdescription($description){return $this->description=$description;}

    public function getdate(){return $this->date;}
    public function setdate($date){return $this->date=$date;}
   
}
?>
