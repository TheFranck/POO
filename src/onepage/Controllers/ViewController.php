<?php
class View
{
  private $title;
  private $content;
  private $style;
  private $directory = "Elements/";
  private $templateExtension = '.html';
  private $templateBase = "templates/template.php";
  private $styleExtension = ".css";
  public function loadHtml($fileName)
  {
    $html = " ";
    $html .= "<div id='" . str_replace($this->templateExtension, " ", $fileName) .  "' >";
    $html .= file_get_contents($this->directory . $fileName);
    $html .= "</div>";

    return $html;
  }

  public function loadCss($fileName)
  {
    /* On charge d'abord le template*/
    $css = " <link rel='stylesheet' href='" . $this->directory . $fileName ."'>";
    return $css;
  }

  public function renderPage($title)
  {
    $template = file_get_contents($this->directory . $this->templateBase);
    $css = " ";
    $html = " ";

    $directoryList = scandir($this->directory); // Scandir va scanner les dossiers et fichiers presents dans le dossier onepage
    foreach ($directoryList as $key => $value) {

      if(strpos($value, $this->templateExtension) !== False ) // verifier si une chaine de caractere est presente dans une autre chaine de caractere
      {
        $html = $html . $this->loadHtml($value);
      }

      if (strpos($value, $this->styleExtension) !== False ) {
        $css = $css . $this->loadCss($value);
      }
    }
      $template = str_replace('%%TITLE%%', $title, $template);
      $template = str_replace('%%CONTENT%%', $html, $template);
      $template = str_replace('%%STYLE%%', $css, $template);
      $template = str_replace('%%MENU%%', file_get_contents($this->directory . "templates/menu.php"), $template);

      echo $template;
  }
}
 ?>
