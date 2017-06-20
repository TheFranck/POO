<?php
  require_once('HumanClass.php');

  class Soldier extends Human
  {
    private $grenade = 5;
    private $ammo = 60;
    private $armor = 10;


    public function attack($enemy) // il va prendre les dealDamage de Human et Soldier
    {
      $ammoCount = 0;
      if ($this->ammo  > 0) {
        if ($this->ammo  < 20) {
          $ammoCount = rand(1, $this->ammo); // il random avec les munitions restantes
        } else {
          $ammoCount = rand(1, 20);
        }
        $enemy->receiveDamage($this->get_power() + $ammoCount);
        $this->ammo = $this->ammo - $ammoCount;
      } elseif ($this->ammo == 0) {
        $this->ammo = 60; // il recharge
      } else {
        throw new Exception("Problème chargeur, quantité de balle :" . $this->ammo);
      }
    }

    public function explosion($enemy)
    {
      if($this->grenade > 0)
      {
        $enemy->receiveDamage($this->get_power() + rand(0, 20));
        $this->grenade = $this->grenade - 1;
      } elseif($this->grenade == 0)
      {
        // Pas d'attaque a la grenade
      } else {
        throw new Exception("Erreur de grenade, nombre de grenade : ". $this->grenade);
      }
    }

    public function receiveDamage($damage)
    {
      if (($damage - $this->armor) <= 0) {
      // Aucun dégat n'est fait
      } else {
        $this->pv = $this->get_pv() - ($damage - $this->armor);
      }
    }

    

  }

 ?>
