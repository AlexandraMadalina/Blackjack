<?php

class Blackjack{
    public $score;
    public $status;
    public function __construct(){
        $this->score = 0;
        $this->status = "start";
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

// if($_SERVER["REQUEST_METHOD"] == "POST"){

//     session_start();
//     $player = new Blackjack();
//     $dealer = new Blackjack();
//     $_SESSION['game'] = [$player, $dealer];
//     header("Location: home.php");
//     exit();
// }else{
//     header("Location: home.php");
//     exit();
// }

?>