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
    $router->get('/', function () use($pdo){
      // Aca agregamos el 'use' porque $pdo esta definido
      // en el scope superior
      // para que la funcion tenga acceso a esa variable se utiliza esta
      // funcionalidad de php

      // return 'Route /';

          // CODIGO PHP DE INDEX.PHP
        // ======================
            //creamos el query
            //trae todos los blog posts empezando por el ultimo ID
            $sql = "SELECT  * FROM blog_posts ORDER BY id DESC";
            //la preparamos y ejecutamos
            $query = $pdo->prepare($sql);
            $query->execute();
            //hacemos el fetch de todas las filas
            $blog_posts = $query->fetchAll(PDO::FETCH_ASSOC);

        // ======================
      // ahora tenemos que hacer el render de la pagina:

        // RENDER
      // ======================
      return render('../views/index.php',['blog_posts' => $blog_posts]);
      // ======================

    });

####
    $router->get('admin',function(){
      // include '../views/admin/index.php';
      return render('../views/admin/index.php');
    });

####
    $router->get('admin/posts', function() use ($pdo){

      // CODIGO PHP DE POSTS.PHP
    // ======================
    //creamos el query
    $sql = "SELECT  * FROM blog_posts ORDER BY id DESC";//trae todos los blog posts empezando por el ultimo ID
    //la preparamos y ejecutamos
    $query = $pdo->prepare($sql);
    $query->execute();
    //hacemos el fetch de todas las filas
    $blog_posts = $query->fetchAll(PDO::FETCH_ASSOC);
    // ======================

        // RENDER
      // ======================
        return render('../views/admin/posts.php',['blog_posts' => $blog_posts]);
      // ======================
    });

####
    $router->get('admin/insert-post',function() {

        // RENDER (GET)
      // ======================
    return render('../views/admin/insert-post.php');
      // ======================
    });

####
    $router->post('admin/insert-post', function () use ($pdo) {
      // CODIGO PHP DE INSERT-POST.PHP (POST)
    // ======================
          $sql = "INSERT INTO blog_posts (title, content) VALUES (:title, :content)";
          //es buena practica preparar las sentencias con 'prepare' porque mejora el rendimiento de la aplicacion.
          //ya que los queries quedan en cache para ser usados cuando yo quiera con 'execute'
          $query = $pdo->prepare($sql);
          $result = $query->execute([
            'title' => $_POST['title'],
            'content' => $_POST['content']
          ]);
    // ======================

    // RENDER (POST)
  // ======================
    return render('../views/admin/insert-post.php',['result' => $result]);
  // ======================

    });

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
