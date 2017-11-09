<?php
  namespace App\Controllers;

/**
 * ESTE ES EL CONTROLADOR PARA LA RUTA INDEX '/'
 */
class AuthController Extends BaseController //para obtener la funcion de render
{

  public function getLogin()
  {
    return $this->render('login.twig');
  }
}

 ?>
