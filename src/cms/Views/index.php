<?php
  $content = "
<h1>COUCOU, Bienvenue sale Bitch</h1>

  ";

  require_once('../Controllers/IndexController.php');
  $index = new Index('Accueil', $content);
  $index->display();
