<?php
class contactController {
    private $prenom;
    private $content;

    public function __construct($prenom, $content){
        $this->prenom = $prenom;
        $this->content = $content;
    }

    // Controller si les données ne sont pas vide
    public function verifyDatas(){
        if(empty($this->prenom) && empty($this->content)){
            return false;
        } 
        return true;
    }
}

