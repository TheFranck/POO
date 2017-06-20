<?php
require_once('Class/SoldierClass.php');
require_once('Class/HeavySoldier.php');
require_once('Class/CombatClass.php');
require_once('Class/RenderClass.php');

$ripley = new Soldier ('Sigourney Weaver', Human::MEDIUM_PV, Human::HIGH_POWER);
$marcus = new HeavySoldier ('Marcus Phenix', Human::HIGH_PV, Human::LOW_POWER);

$combat = new Combat();
$combat->fullcombat($ripley, $marcus);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mortal War kombat</title>

    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <section>

    </section>
  </body>

</html>
