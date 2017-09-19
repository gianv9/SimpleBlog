<?php
//inicializar el SISTEMA DE ERRORES DE PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// este codigo permite que php retorne cualquier error
// en cualquier punto de la aplicacion

//incluimos el modulo de autoloading de composer
//que permite cargar las clases de los
// paquetes instalados por composer
require_once '../vendor/autoload.php';
// Source:https://getcomposer.org/doc/01-basic-usage.md#autoloading

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

//agregamos el namespace del paquete phroute
// para utilizar sus clases:
use Phroute\Phroute\RouteCollector;

//creamos el objeto router
$router = new RouteCollector();
//definimos el tipo de request y las rutas
$router->get('/', function () use($pdo){
  // Aca agregamos el 'use' porque $pdo esta definido
  // en el scope superior
  // para que la funcion tenga acceso a esa variable se utiliza esta
  // funcionalidad de php

  // return 'Route /';

  // CODIGO PHP DE INDEX
// ============================================================================================================
    //creamos el query
    $sql = "SELECT  * FROM blog_posts ORDER BY id DESC";//trae todos los blog posts empezando por el ultimo ID
    //la preparamos y ejecutamos
    $query = $pdo->prepare($sql);
    $query->execute();
    //hacemos el fetch de todas las filas
    $blog_posts = $query->fetchAll(PDO::FETCH_ASSOC);

    // Query alternativo:
    // $blog_posts = $pdo->query($sql,PDO::FETCH_ASSOC);
    // Fin query

    //inspeccionamos los valores:
    // var_dump($blog_posts);
    // echo "<br />";
    // foreach ($blog_posts as $blog_post):
    //   var_dump($blog_post);
    // endforeach;
// ============================================================================================================
  // ahora tenemos que hacer el render de la pagina:
  include '../views/index.php';
});

//utilizamos el dispatcher
// que es el objeto que va a tomar la ruta que
// nos esta llegando. Este manda a llamar el
// metodo que se necesita
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//generamos una respuesta que es lo que nos va a regresar el dispatcher
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo "$response";

// // Router estatico de ejempo:
// switch ($route) {
//   case '/':
//       require '../index.php';
//     break;
//   case 'admin':
//       require '../admin/index.php';
//       // echo "$route";
//     break;
//   case 'admin/posts':
//       require '../admin/posts.php';
//     break;
//   default:
//     # code...
//     break;
// }

 ?>
