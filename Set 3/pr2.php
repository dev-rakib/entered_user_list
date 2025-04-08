<?php
class student{
    public $name = "Rakib";
    public $roll = 02;
    public $bangla = 60;
    public $english = 80;
    public $maths = 50;

    public function showDetails(){
        echo "Name: $this->name; Roll: $this->roll <br>";
    }
}

class result extends student{
    public function result(){
        echo "Your percentage is: ".(($this->bangla+$this->english+$this->maths)/3)."%<br>";
    }
}

$r = new result;
$r->result();
$r->showDetails()
?>