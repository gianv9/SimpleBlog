<?php
  // namespace App\Controllers;
  namespace app\controllers;
  use App\Models\BlogPosts;

/**
 * ESTE ES EL CONTROLADOR PARA LA RUTA INDEX '/'
 */
class IndexController Extends BaseController //para obtener la funcion de render
{
  //numero de post por pagina
  const PAGING_SIZE = 2;
  public $blog_posts = null;
  public $posts_count = 0;

  function __construct(){
    // obtengo constructor de la clase padre 
    parent::__construct();
    // obtengo la cantidad de blog_posts
    $this->posts_count = BlogPosts::query()->count();
  }

  public function getIndex()
  {
    $this->blog_posts = BlogPosts::query()->orderBy('id','desc')->limit($this::PAGING_SIZE)->get();
      // RENDER
    // ======================
    // return $render('../views/index.php',['blog_posts' => $blog_posts]);
    return $this->render('index.twig',['blog_posts' => $this->blog_posts]);
    // ======================

  }

  public function getPage($arg = null){
    // si se desea accesar a la pagina 1, 
    // redirecciona a la pagina principal
    if ($arg == 1) {
      header('Location: '. BASE_URL );
    }

    // cantidad de post que quiero saltar...
    $previous = ( ($arg-1) * $this::PAGING_SIZE );

    // si tengo mas posts de los que salte
    if ($this->posts_count > $previous) {
      //->take($this::PAGING_SIZE) = el numero de post que muestro
      $this->blog_posts = BlogPosts::skip( $previous )
                                   ->take($this::PAGING_SIZE)
                                   ->orderBy('id','desc')
                                   ->get();
    }
    else{
      header('Location: ' . BASE_URL );
    }
    return $this->render('index.twig',['blog_posts' => $this->blog_posts]);

  }
}

 ?>
