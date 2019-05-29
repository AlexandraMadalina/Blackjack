<?php
require_once('blackjack.php');
session_start();
if(isset($_POST['start'])){
    $player = new Blackjack();
    $dealer = new Blackjack();
    $game = "started";
    $_SESSION['game'] = [$player, $dealer, $game];
    }
if(isset($_SESSION['game'])){
       $resoults = "";
       $player = $_SESSION['game'][0];
       $dealer = $_SESSION['game'][1];
       if($player->score>21){
        $resoults = "lose";
        echo "<p>You lose</p>";
       }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
</head>

<body>
    <form action="home.php" method="post" class="d-<?php if(isset($_POST['start']) || isset($_SESSION['game'])){echo "none";}else{echo "block";} ?>">
        <button type="submit" name="start" class="btn btn-outline-success d-block mx-auto mt-5 start">START</button>
    </form>
    <div
        class="container mt-5 bg-dark rounded shadow py-5 px-5 mx-auto d-<?php if(isset($_SESSION['game'])){echo "block";}else{echo "none";} ?>">
       <div class="row text-center">
           <div class="col">
               <p class="bg-light py-2 px-2 play text-dark">Player</p>
               <div class="bg-light play py-5 px-5 text-dark"><?php 
                    if(isset($_SESSION['game'])){
                       // var_dump($_SESSION['game'][0]);
                       echo $player->score;
                    }
                    ?></div>
           </div>
           <div class="col">
               <p class="bg-light py-2 px-2 play text-dark">Dealer</p>
               <div class="bg-light play py-5 px-5 text-dark"><?php 
                    if(isset($_SESSION['game'])){
                       echo $dealer->score;
                    }
                    ?></div>
           </div>
       </div>
    </div>
    <div class="container mt-5 bg-dark rounded shadow py-5 px-5  d-<?php if(isset($_SESSION['game'])){echo "block";}elseif(isset($_SESSION['game']) && $resoults == "lose"){echo "none";}else{echo "none";} ?>">
        <div class="row">
            <div class="col">
                <form action="game.php" method="post">
                    <button type="submit" name="hit"
                        class="w-100 bg-light btn btn-outline-secondary play">HIT</button>
                </form>
            </div>
            <div class="col">
                <form action="game.php" method="post">
                    <button type="submit" name="stand"
                        class="w-100 bg-light btn btn-outline-secondary play">STAND</button>
                </form>
            </div>
            <div class="col">
                <form action="game.php" method="post">
                    <button type="submit" name="surrender"
                        class="w-100 bg-light btn btn-outline-secondary play">SURRENDER</button>
                </form>
            </div>
        </div>
    </div>
    <a href="clearsession.php">clear session</a>
</body>

</html>