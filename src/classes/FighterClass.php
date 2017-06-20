<?php
// on va créer un objet qui représente une voiture.

/*class Car
{
  // Couleur
  public $color = "blue";
  // Marque
  public $brand;
  // Modele
  public $type;
  // Année
  public $year;
  // Prix
  public $price;
  // Essence
  public $fuel;
};

$car1 = new Car(); // dans l'element car1, on instancie new Car
$car2 = new Car();
$car2->color = "red";
//var_dump($car1);die; // Lors de l'affichage, les éléments sans indication son NULL par défaut
//var_dump($car1->color); // On affiche juste la color de car1
var_dump($car2->color);
*/?>

  
<?php
require_once('HumanClass.php');
class Fighter extends Human
{ // ICI ON PLACE LES CONSTANTES

  // ICI CE SONT LES PROPRIETES
  private $shield = 5;
  private $stamina = 50;


  public function protect()
  {
  if ($this->shield > 0) {
    $this->shield = $this->shield - 1;
  } else {
    // On pare pas l'attaque
    }
  }

  public function slash($enemy)
  {
    if ($this->stamina > 0) {
      $enemy->receiveDamage(20);
      $this->stamina = $this->stamina - 1;
    } else {
      // On est trop fatigué
      }
  }

};

//$fighter-> set_pv(300);
//var_dump($fighter-> set_name('Alex Ferguson'));

//$damage = $jose->dealDamage();
//$alex->receiveDamage($damage);
/*$damage = $jose->get_power() * 2;
$alex->set_pv($alex->get_pv() - $damage);*/
