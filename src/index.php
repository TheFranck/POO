<?php
require_once('classes/FighterClass.php');
require_once('classes/ThiefClass.php');
require_once('classes/WizardClass.php');

$alex = new Fighter('Alex Ferguson', Human::HIGH_PV, Human::LOW_PM, Human::HIGH_POWER); //Nous passons une constante a PV
$jose = new Thief('Jose Mourinho', Human::MEDIUM_PV, Human::MEDIUM_PM, Human::MEDIUM_POWER);
$carlo = new Wizard('carlo Ancelotti', Human::LOW_PV, Human::HIGH_PM, Human::HIGH_POWER);



echo($carlo->get_pv());
echo('<br>');
$alex->slash($carlo);
echo($carlo->get_pv());
/*var_dump($jose);
var_dump($alex);
var_dump($carlos);*/

?>
