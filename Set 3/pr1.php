<?php
class student{
    public $name = "Rakib";
    public $roll = 02;

    public function showDetails(){
        echo "Name: $this->name; Roll: $this->roll";
    }
}

$d = new student;
$d->showDetails();
?>