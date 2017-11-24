<?php
  namespace App\Controllers;
  use App\Models\BlogPosts;

/**
 * ESTE ES EL CONTROLADOR PARA LA RUTA INDEX '/'
 */
class IndexController Extends BaseController //para obtener la funcion de render
{

  public function getIndex()
  {
    $blog_posts = BlogPosts::query()->orderBy('id','desc')->get();
      // RENDER
    // ======================
    // return $render('../views/index.php',['blog_posts' => $blog_posts]);
    return $this->render('index.twig',['blog_posts' => $blog_posts]);
    // ======================

  }
}

 ?>
