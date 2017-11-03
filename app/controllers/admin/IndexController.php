<?php
#tenemos que agregar la seccion de admin para que pr4 encuentre esa carpeta
#automaticamente
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**
 *
 */
class IndexController extends BaseController
{
  
  function getIndex ()
  {
      return $this->render('admin/index.twig');
  }
}

 ?>
