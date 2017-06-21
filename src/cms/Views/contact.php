<?php
  $content =
  '
  <h1>Contact</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42442.329826978836!2d2.310446187145906!3d48.854231878771515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1498036780355" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  ';
  require_once('../Controllers/ContactController.php');
  $index = new Contact('Contact', $content);
  $index->display();
 ?>
