<?php
require_once('HumanClass.php');

class HeavySoldier extends Human
{
  private $fuel = 20;
  private $energyCell = 15;
  private $armor = 25;

  public function attack($enemy)
  {

    $randomEnergy = 0;
    if ($this->energyCell > 0) {
      if ($this->energyCell < 5) {
        $randEnergy = rand(1, $this->energyCell);
      } else {
        $randomEnergy = rand(1, 5);
      }
      $enemy->receiveDamage($this->get_power() + $randomEnergy);
      $this->energyCell = $this->energyCell - $randomEnergy;
      $this->regenerateEnergy();
    } elseif ($this->energyCell == 0) {
      $this->regenerateEnergy();
    } else {
      throw new Exception("Erreur de Energy Cell, quantité d'energy :" .$this->energyCell);
    }
  }

  public function burn($enemy)
  {
    if ($this->fuel > 0 ) {
      $enemy->receiveDamage($this->get_power() + rand(1, 5));
      $this->fuel = $this->fuel - 1;
    } elseif ($this->fuel == 0) {
      // On attaque pas du tout
    } else {
      throw new Exception("Erreur de Fuel, quantité de fuel :" .$this->fuel);
    }
  }

  public function receiveDamage($damage)
  {
   if (($damage - $this->armor) <= 0) {
     # code...
   } else {
     $this->pv = $this->get_pv() - ($damage - $this->armor);
   }
  }

  private function regenerateEnergy()
  {
    $energy = rand(1, 10);
    $this->energyCell = $this->energyCell + $energy;
  }
}

 ?>
