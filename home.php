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
    <form action="home.php" method="post">
        <button type="submit" name="start" class="btn btn-outline-success d-block mx-auto mt-5 start">START</button>
    </form>

    <div class="container mt-5 bg-dark rounded shadow py-5 px-5 centered d-<?php if(isset($_POST['start'])){echo "block";}else{echo "none";} ?>">
        <div class="row">
            <div class="col">
                <form action="game.php">
                    <button type="submit" name="hit" class="w-100 p-5 bg-light btn btn-outline-secondary play">HIT</button>
                </form>
            </div>
            <div class="col">
                <form action="hame.php" method="post">
                    <button type="submit" name="stand" class="w-100 p-5 bg-light btn btn-outline-secondary play">STAND</button>
                </form>
            </div>
            <div class="col">
                <form action="game.php" method="post">
                    <button type="submit" name="surrender" class="w-100 p-5 bg-light btn btn-outline-secondary play">SURRENDER</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>