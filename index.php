<?php
$suits=['clubs', 'diamonds', 'hearts','spades'];
$ranks=[2,3,4,5,6,7,8,9,10,'J', 'Q', 'K', 'A']
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>

<body>
  <div id="deck" class="deck">
    <?php foreach ($suits as $suit) { ?>
      <?php foreach ($ranks as $rank) : ?>
    <div class="card">
      <div class="number hearts">2</div>
      <div class="suit"><img src="images/hearts.png"></div>
      <div class="number hearts">2</div>
    </div>
    <?php endforeach : ?>
    <?php } ?>
  </div>

  <div id="deck" class="deck">
    <div class="card">
      <div class="number hearts">2</div>
      <div class="suit"><img src="images/hearts.png"></div>
      <div class="number hearts">2</div>
    </div>
  </div>
</body

</html>