<?php
  require_once ('PageController.php');
  class Index extends Page
  {
    
  }

  /*<?php
  require_once('../Library/RenderClass.php');
  class Index
  {
      private $title;
      private $content;
      private $render;
      // On créer ensuite méthode de construction

      public function __construct($title, $content)
      {
          $this->render = Render::getInstance();
          $this->title = $title;
          $this->content = $content;

      }
      public function display()
      {
          $template = file_get_contents('../Views/template.php');                     //On utilise file_get_contents car il s'agit de HTML
          $temp = $this->render->renderTitle($this->title, $template);                //Variable intermédiaire
          $final = $this->render->renderContent($this->content, $temp);
          echo $final;
      }
  }*/
