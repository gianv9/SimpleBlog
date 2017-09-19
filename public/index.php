<?php
//inicializar el SISTEMA DE ERRORES DE PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// este codigo permite que php retorne cualquier error
// en cualquier punto de la aplicacion

//quitamos el include de las vistas y lo agregamos al controlador principal
include_once '../config.php';
//
// Operador de fusión de null ¶
//
// El operador de fusión de null (??) se ha añadido como aliciente sintáctico
// para el caso común de la necesidad de utilizar un operador ternario junto
// con isset(). Devuelve su primer operando si existe y no es NULL;
// de lo contrario devuelve su segundo operando.
// http://php.net/manual/es/migration70.new-features.php
  // (Operador disponible para PHP 7)
// $route = $_GET['route'] ?? '/';
  //en este caso para PHP 5:
$route = isset($_GET['route']) ? $_GET['route'] : '/';

switch ($route) {
  case '/':
      require '../index.php';
    break;
  case 'admin':
      require '../admin/index.php';
      // echo "$route";
    break;
  case 'admin/posts':
      require '../admin/posts.php';
    break;
  default:
    # code...
    break;
}

 ?>
