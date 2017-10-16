<?php
  namespace App\Controllers;
/**
 * ESTE ES EL CONTROLADOR PARA LA RUTA INDEX '/'
 */
class IndexController Extends BaseController //para obtener la funcion de render
{

  public function getIndex()
  {
          global $pdo;//esta variable va a ser tomada del scope superior!

        // CODIGO PHP DE INDEX.PHP
      // ======================
          //creamos el query
          //trae todos los blog posts empezando por el ultimo ID
          $sql = "SELECT  * FROM blog_posts ORDER BY id DESC";
          //la preparamos y ejecutamos
          $query = $pdo->prepare($sql);
          $query->execute();
          //hacemos el fetch de todas las filas
          // PDO no esta en nuestro namespace actual,
          // por tanto debemos especificarlo de manera explicita poniendo
          // un '\'
          // En este caso esta en el namespace global de PHP
          $blog_posts = $query->fetchAll(\PDO::FETCH_ASSOC);

      // ======================
    // ahora tenemos que hacer el render de la pagina:

      // RENDER
    // ======================
    // return $render('../views/index.php',['blog_posts' => $blog_posts]);
    return $this->render('index.twig',['blog_posts' => $blog_posts]);
    // ======================

  }
}

 ?>
