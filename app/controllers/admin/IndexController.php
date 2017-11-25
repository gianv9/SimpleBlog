<?php
#tenemos que agregar la seccion de admin para que pr4 encuentre esa carpeta
#automaticamente
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

/**
 *
 */
class IndexController extends BaseController
{
  
  function getIndex ()
  {
    // si tenemos una sesion, nos quedamos ahi
    if( isset($_SESSION['userId'])  ){
      $userId = $_SESSION['userId'];
      $user = User::find($userId);

      if ($user) {
        return $this->render('admin/index.twig', ['user' => $user]);
      }
    }
    // de lo contrario redireccionamos al login
    header('Location: ' . BASE_URL . 'auth/login');
      
  }
}

 ?>
