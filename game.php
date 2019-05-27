<?php
require "blackjack.php";
session_start();
$player = new Blackjack();
$dealer = new Blackjack();
$_SESSION['game'] = [$player, $dealer];
?>