<?php

class Turkey {

    public function gobble() {
       echo "Gobble gobble " . '<br>';
    }

    public function fly() {
        echo "I'm flying a short distance " . '<br>';
    }


}

class turkeyAdapter extends Duck {

    private $turkey;

    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }

    public function quack() {
        echo "Gobble gobble " . '<br>';
    }

    public function fly() {
        echo "I'm flying a short distance " . '<br>';
        echo "I'm flying a short distance " . '<br>';
        echo "I'm flying a short distance " . '<br>';
        echo "I'm flying a short distance " . '<br>';
        echo "I'm flying a short distance " . '<br>';
 }

}