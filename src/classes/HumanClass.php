<?php
/**
 *
 */
abstract class Human // on ne peut pas l'instancier avec abstract
{
  const LOW_PV = 100;
  const MEDIUM_PV = 400;
  const HIGH_PV = 700;

  const LOW_PM = 10;
  const MEDIUM_PM = 30;
  const HIGH_PM = 50;

  const LOW_POWER = 10;
  const MEDIUM_POWER = 50;
  const HIGH_POWER = 100;

  private $pv;
  private $pm;
  private $name;
  private $power;


  public function  __construct($name, $pv, $pm, $power) // ceci est une méthode
  {
    $this->set_pv($pv);
    $this->set_pm($pm);
    $this->set_power($power);
    $this->set_name($name);
  }

  public function set_pv($pv)
  {
    if ($pv === Self::LOW_PV || $pv === Self::MEDIUM_PV || $pv === Self::HIGH_PV) // Self c'est en lien avec la classe
    {
      $this->pv = $pv;
    } else {
      throw new Exception("Erreur de valeur pour les points de vie");
      //var_dump("What the hell");die;
    }
    $this->pv = $pv;
  }
  public function get_pv()
  {
    return $this->pv;
  }

  public function set_pm($pm)
  {
    if ($pm === Self::LOW_PM || $pm === Self::MEDIUM_PM || $pm === Self::HIGH_PM)
    {
      $this->pm = $pm;
    } else {
      throw new Exception("Erreur de valeur pour les points de Magie");
      //var_dump("What the hell");die;
    }
      $this->pm = $pm;
  }
  public function get_pm()
  {
    return $this->pm;
  }

  private function set_name($name)
  {
      $this->name = $name;
  }
  public function get_name()
  {
    return $this->name;
  }

  public function set_power($power)
  {
    if ($power === Self::LOW_POWER || $power === Self::MEDIUM_POWER || $power === Self::HIGH_POWER)
    {
      $this->power = $power;
    } else {
      throw new Exception("Erreur de valeur pour les points de Puissance");
      //var_dump("What the hell");die;
    }
      $this->power = $power;
  }
  public function get_power()
  {
    return $this->power;
  }

  public function dealDamage($enemy)
  {
    $enemy->receiveDamage($this->get_power() * 2);
  }
  public function receiveDamage($damage)
  {
    $this->pv = $this->get_pv() - $damage;
  }
};

 ?>
