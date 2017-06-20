<?php
require_once('HumanClass.php');
class Wizard extends Human
{
  private $levitation = 10;

  public function fly()
  {
    if ($this->levitation > 0) {
      // Il esquive le coup en volant
      $this->levitation = $this->levitation - 1;
    } else {
    // Il se prends la mandale
    }
  }

  public function fireball($enemy)
  {
    if ($this->pm > 0) {
    // Il balance une boule de feu
    $enemy->receiveDamage(30);
    $this->pm = $this->pm - 1;
    } else {
    // T'as plus de magie Bitch
    }
  }


};
