<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

/**
 *
 */
class PostsController extends BaseController
{

  public function getIndex()
  {
    # admin/posts or admin/posts/index

          global $pdo;

          // CODIGO PHP DE POSTS.PHP
        // ======================
        //creamos el query
        $sql = "SELECT  * FROM blog_posts ORDER BY id DESC";//trae todos los blog posts empezando por el ultimo ID
        //la preparamos y ejecutamos
        $query = $pdo->prepare($sql);
        $query->execute();
        //hacemos el fetch de todas las filas
        $blog_posts = $query->fetchAll(\PDO::FETCH_ASSOC);
        // ======================

            // RENDER
          // ======================
            return $this->render('admin/posts.twig',['blog_posts' => $blog_posts]);
          // ======================
  }
  public function getInsert(){
            # admin/insert-posts
            // RENDER (GET)
          // ======================
        return $this->render('admin/insert-post.twig');
          // ======================
  }
  public function postInsert(){
    # admin/insert-posts

        global $pdo;

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
  return $this->render('admin/insert-post.php',['result' => $result]);
  // ======================

  }
}

 ?>
