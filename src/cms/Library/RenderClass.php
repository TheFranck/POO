<?php
  class Render
  {
    //private $selector = "%%";
    private static $_instance = null;
    private function __construct() {

    }
    public static function getInstance()
    {
      if(is_null(self::$_instance)) {
        self::$_instance = new Render();
      }
      return self::$_instance;
    }
    /*
    * Render
    * Input : $menu contient le menu HTML
    * input : $title contient le titre initialisé dans controller
    * Input : $content  contient le contenu chargé a partir de view
    * Input : $template  contient le template qui est toujours le même
    * output : Return le HTML complet de display dans Views
    */
    public function render($menu, $title, $content, $template)
    {
      $finalHtml = "";
      $finalHtml = $this->renderMenu($menu, $template);
      $finalHtml = $this->renderTitle($title, $finalHtml);
      $finalHtml = $this->renderContent($content, $finalHtml);
      return $finalHtml;
    }


    private function renderTitle($title, $template)
    {
      return str_replace('%%TITLE%%', $title, $template);  //return str_replace($this->selector .'TITLE'.$this->selector , $title, $template); lorsque que le private $selector est activé
    }
    private function renderMenu($menu, $template)
    {
      return str_replace('%%MENU%%', $menu, $template);
    }
    private function renderContent($content, $template)
    {
      return str_replace('%%CONTENT%%', $content, $template);
    }

  }
