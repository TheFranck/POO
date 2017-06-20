<?php
require_once('HumanClass.php');
class Thief extends Human
{
  private $cloak = 10;
  private $agility = 30;

  public function hide()
  {
    if ($this->cloak > 0) {
      // Il esquive le coup
      $this->cloak = $this->cloak - 1;
    } else {
    // Il se prends la mandale
    }
  }

  public function stab($enemy)
  {
    if ($this->agility > 0) {
    // Il poignarde comme un lache
    $enemy->receiveDamage(15);
    $this->agility = $this->agility - 1;
    } else {
    // Echec du coup
    }
  }


};
