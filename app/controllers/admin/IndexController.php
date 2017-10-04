<?php
#tenemos que agregar la seccion de admin para que pr4 encuentre esa carpeta
#automaticamente
namespace App\Controllers\Admin;
/**
 *
 */
class IndexController
{
  
  function getIndex ()
  {
      return render('../views/admin/index.php');
  }
}

 ?>
