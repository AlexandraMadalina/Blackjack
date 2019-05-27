<?php
class Blackjack{
    public $score;
    public function __construct($start_point){
        $this->score == $start_point;
    }
    public function hit(){
        $card = rand(1,11);
        $this->score +=$card;
    }
    public function stand(){

    }
    public function surrender(){

    }
}

?>