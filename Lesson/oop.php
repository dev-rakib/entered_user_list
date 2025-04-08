<?php
class Watch{
    public $brand = "Rolex";

    public function showWatch(){
        echo "Brand: ".$this->brand."<br>";
    }
}

$show = new Watch();
$show->showWatch();


class name{
    public $name;

    public function __construct($take){

        $this->name = $take;

    }

    public function call(){
        echo "Hey, ".$this->name."<br>";
    }
}

$give = new name("Rakib");
$give->call();


class bank{
    private $balance = 12000;

    public function getbalance(){
        return $this->balance;

    }
}

$acc = new bank();
echo $acc->getbalance()."<br>";


class car{
    public function s(){
        echo "sound";
    }
}
class bmw extends car{
    public function s(){
        echo "vroom<br>";
    }
}

$s = new bmw;
$s->s();


abstract class animals{
    abstract public function sound();
}
class dog extends animals{
    public function sound()
    {
        echo "barking...<br>";
    }
}
$d = new dog;
$d->sound();

interface sound{
    public function bark();
}
class ds implements sound{
    public function bark()
    {
        echo "bhaw bhaw!<br>";
    }
}
$db = new ds;
$db->bark();
?>