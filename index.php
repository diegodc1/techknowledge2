<?php
/* Site: Betabase
Autor: Diego Alves
Data: 27 de junho, 2022 */

// Define a página atual pela URL

$pagina = "front-end";

if (isset($_GET["i"])) {
  $pagina = addslashes($_GET['i']);
}

// Carrega o header.php 

include 'app/views/header.php';

// Carrega a página escolhida pelo usuário
switch ($pagina) {
  case 'front-end';
    include 'app/views/front-end.php';
    break;
  case 'back-end';
    include 'app/views/back-end.php';
    break;
  case 'geral';
    include 'app/views/geral.php';
    break;
  default:
    include 'app/views/front-end.php';
    break;
}

// Carrega o footer.php
include 'app/views/footer.php';
