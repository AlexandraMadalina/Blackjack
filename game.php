<?php
require_once("blackjack.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $player = $_SESSION['game'][0];
    $dealer = $_SESSION['game'][1];
    
    switch($_POST){
        case isset($_POST['hit']):
        $player->hit();
        header("Location: home.php");
        break;
        case isset($_POST['stand']):
        $player->stand();
        header("Location: home.php");
        var_dump($_POST);
        break;
        case isset($_POST['surrender']):
        var_dump($_POST);

        
    }  


}

?>