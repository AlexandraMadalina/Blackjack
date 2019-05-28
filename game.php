<?php
require_once("blackjack.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $player = $_SESSION['game'][0];
    $dealer = $_SESSION['game'][1];
    
    switch($_POST){
        case isset($_POST['hit']):
        var_dump($_SESSION['game'][0]);
        $player->hit();
        var_dump($_SESSION['game'][0]);

        header("Location: home.php");
        
        // var_dump($_POST);
        break;
        case isset($_POST['stand']):
        var_dump($_POST);
        break;
        case isset($_POST['surrender']):
        var_dump($_POST);

        
    }  


}

?>