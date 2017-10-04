<?php
// var_dump($_GET);
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

//directorio base de la aplicaicon
//direccion del script:
// $baseDir = $_SERVER['SCRIPT_NAME'];
// var_dump($baseDir);
// echo "<hr />";
//$variableConResultado = str_replace(<elemento(s) a buscar> <valor por el que se reemplaza>,<cadena afectada>)
// Source:
// http://php.net/manual/es/function.str-replace.php


    #================================== URL BASE ========================================
        $baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        // var_dump($baseDir);
        //url base
        $baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
        // var_dump($baseUrl);
        //definimos una constante
        define('BASE_URL', $baseUrl);
      #===============================================================================

      #================================== VIEWS RENDERING =======================================
          #by initializing the params parameter of the function we can call it using only the fileName.
          # example:
            #render('add_blog_post.php');
        function render( $fileName , $params = [] ){
          //skip output, strore everything internally
          //everything in between will be returned as a string
            ob_start();//Turn on output buffering
            extract($params); //turn an associative array into a set of global variables
            include_once $fileName;
            return ob_get_clean();//Get current buffer contents and delete current output buffer
        }
        #===============================================================================


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

//creamos el objeto router para almacenar las rutas
$router = new RouteCollector();
//definimos el tipo de request y las rutas
// $router->tipoderequest->('ruta',funcion anonima callback para responder)

#===========================#==========================ROUTES===========================#================================#
####
    $router->controller('/',App\Controllers\IndexController::class);#(ruta,clase controladora)
    //utilizamos una clase controladora en vez de un metodo especifico

####
    $router->controller('admin',App\Controllers\Admin\IndexController::class);

####
    $router->controller('admin/posts', App\Controllers\Admin\PostsController::class);

####
    $router->controller('admin/posts/insertPost', App\Controllers\Admin\PostsController::class);

#===========================#===============================#===============================#================================#

//utilizamos el dispatcher
// que es el objeto que va a tomar la ruta que
// nos esta llegando. Este manda a llamar el
// metodo que se necesita
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

//generamos una respuesta que es lo que nos va a regresar el dispatcher
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo "$response";

 ?>
