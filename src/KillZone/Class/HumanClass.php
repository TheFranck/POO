<?php
require_once('RenderClass.php');
abstract class Human // on ne peut pas l'instancier avec abstract
{
  const LOW_PV = 10;
  const MEDIUM_PV = 40;
  const HIGH_PV = 70;

  const LOW_POWER = 10;
  const MEDIUM_POWER = 50;
  const HIGH_POWER = 100;

  protected $pv;
  protected $name;
  protected $power;
  protected $render;


  public function  __construct($name, $pv, $power) // ceci est une méthode
  {
    $this->set_pv($pv);
    $this->set_power($power);
    $this->set_name($name);
    $this->render = Render::getInstance();
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

  public function attack($enemy)
  {
    $enemy->receiveDamage($this->get_power());
  }
  public function receiveDamage($damage)
  {

    $this->pv = $this->get_pv() - $damage;
  }

  public function state()
  {
    if ($this->get_pv() > 0) {
      return True;
    } else {
      return False;
    }
  }
};

 ?>
