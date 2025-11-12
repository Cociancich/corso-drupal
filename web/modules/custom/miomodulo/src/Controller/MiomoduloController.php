<?php

namespace Drupal\miomodulo\Controller;

use Drupal\Core\Controller\ControllerBase;

class MiomoduloController extends ControllerBase {

  /**
   *
   */
  function miaPagina() {
  $miavar['test'] = [
    'nomee' => 'nicola',
  ];
  $nome = $miavar['test']['nome'] ?? 'no nome';
  // dump($nome);
  $msg = 'Render html Mia pagina';

  return [
    '#markup' => '<h2>' . $this->t($msg) . '</h2>',
  ];
 }

}
