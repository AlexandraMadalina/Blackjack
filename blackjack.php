<?php
class Blackjack{
    public $score;
    public $status;
    public function __construct(){
        $this->score == 0;
    }
    public function hit(){
        $card = rand(1,11);
        $this->score +=$card;
    }
    public function stand(){
        $this->status = "stand";
    }
    public function surrender(){
    $this->status = "surrender";
    }
}

?>