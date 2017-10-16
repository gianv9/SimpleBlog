<?php
//agregamos el namespace en el que estoy trabajando

namespace App\Controllers;

use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 *
 */
class BaseController
{

  //agregamos una propiedad protegida, para que la usen los hijos
  protected $templateEngine;

  //siempre se ejecuta en las clases hijas
  function __construct()
  {
    // Inicializar y cargar Twig
    //clase para cargar los archivos del sistema
    //se pone el '\' antes de Twig porque pertenece al namespace global
    $loader = new Twig_Loader_Filesystem('../views');//desde donde cargaremos nuestros archivos de vista
    //ruta esta definida a partitr del script que manda a llamar esta clase
    //es decir como llamo este script/esta clase desde IndexController.php esa es la ruta relativa

    $this->templateEngine = new Twig_Environment($loader,[
      'debug' => true,
      'cache' => false
    ]);

  }

  //para hacer el render de las vistas
  public function render($fileName,$data = [])
  {
    return $this->templateEngine->render($fileName, $data);
  }
}

 ?>
