<meta charset="utf-8" content="">
<?php
require_once('RenderClass.php');
  class Combat
  {
    private $turn = 0;
    private $render;

    public function __construct()
    {
      $this->render = Render::getInstance();
    }

    public function inititative()
    {
      $rand1 = rand(1, 1000);
      $rand2 = rand(1, 1000);

      if ($rand1 > $rand2) {
        // Joueur 1 joue en premier
        return 1;
      } elseif ($rand2 > $rand1) {
        // Joueur 2 joue en premier
        return 2;
      } else {
        return False;
        // inititative a gerer
      }
    }

    //Simulation d'un tour de combat
    public function combatTurn($soldier, $heavySoldier) // Attention c'est des variables pas des classes
    {

    $heavySoldierName = $heavySoldier->get_name();
    $soldierName = $soldier->get_name();

    $inititative = $this->inititative();
    switch ($inititative) {
      // Joueur 1 attaque
      case 1 :
      $this->render->message($soldierName ." " . "Attaque" . " " . $heavySoldierName, "text-decoration:underline;");
        $rand = rand(1, 2);
        if ($rand == 1) {
          $this->render->message($soldierName ." " . "utilise son Fusil D'assaut ");
          $soldier->attack($heavySoldier);
        } elseif ($rand == 2) {
          $this->render->message($soldierName . " " . "utilise son Lance grenade ");
          $soldier->explosion($heavySoldier);
        }
        break;
      // joueur 2 attaque
      case 2 :

      $this->render->message($heavySoldierName . " " . "Attaque" . " " . $soldierName, "text-decoration:underline;");
      $rand = rand(1, 2);
      if ($rand == 1) {
        $this->render->message($heavySoldierName . " " . "utilise son BFG ");
        $heavySoldier->attack($soldier);
      } elseif ($rand == 2) {
          $this->render->message($heavySoldierName . " " . "utilise son Lance-Flamme ");
        $heavySoldier->burn($soldier);
      }
          break;
      // On ne fait rien et on lance un nouveau tour
      case False:
              # code...
          break;
      default:
        throw new Exception("Erreur lors de l'inititative : " . $inititative);
        break;
    }
  }

  public function fullcombat($soldier, $heavySoldier)
  {

    $heavySoldierName = $heavySoldier->get_name();
    $soldierName = $soldier->get_name();

    while (True) {
      $this->combatTurn($soldier, $heavySoldier);
      if ($soldier->state() == False && $heavySoldier->state() == True) {
        $this->render->success($heavySoldierName . " " . "a gagné");
        return True;
        // le marine a gagné
      } elseif ($heavySoldier->state() == False && $soldier->state() == True) {
        $this->render->success($soldierName . " " . "a gagné et a buté de l'alien");
        return True;
        // heavy a gagné
      } elseif ($heavySoldier->state() == False && $soldier->state() == False) {
        $this->render->info( "Double Mort ");
        return True;
        //les 2 sont morts
      } elseif ($heavySoldier->state() == True && $soldier->state() == True) {
          $this->turn = $this->turn +1;
          // les 2 sont vivants et on continue la fight
      }
      /*
      if ($soldier->state() == False || $heavySoldier->state() == False) {
        // C'est la fin du combat, on a vainqueur
        $this->render->success('Flawless Victory ');
        return True;
      } elseif ($soldier->state() == False && $heavySoldier->state() == False) {
        // Les 2 sont dead, match nul
        $this->render->info(' Match Nul !! Mais Nul ');
        return True;
      }*/

    }
  }




  }


 ?>
