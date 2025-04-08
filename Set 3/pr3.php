<?php
class std{
    public $name;
    public $roll;

    public function __construct($name,$roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }

    public function showDetails(){
        echo "Name: $this->name; Roll: $this->roll";
    }
}

$d = new std("Rakib",1);
$d->showDetails();
?>