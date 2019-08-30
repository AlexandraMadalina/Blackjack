<?php
require_once("blackjack.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $player = $_SESSION['game'][0];
    $dealer = $_SESSION['game'][1];
    
    switch($_POST){
        case isset($_POST['start']):
        $player = new Blackjack();
        $dealer = new Blackjack();
        $_SESSION['game'] = [$player, $dealer];
        header("Location: index.php");
        break;
        case isset($_POST['hit']):
        $player->hit();
        header("Location: index.php");
        break;
        case isset($_POST['stand']):
        $player->stand();
        while($dealer->score<15){
            $dealer->hit();
        }
        header("Location: index.php");
        
        break;
        case isset($_POST['surrender']):
        while($dealer->score<15){
            $dealer->hit();
        }
        $player->surrender();
        header("Location: index.php");
        
    }  


}

?>