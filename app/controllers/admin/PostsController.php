<?php
namespace app\controllers\Admin;

use app\controllers\BaseController;
use app\models\BlogPosts;
use Sirius\Validation\Validator;
/**
 *
 */
class PostsController extends BaseController
{

  public function getIndex()
  {
   
        $blog_posts = BlogPosts::all();


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

    $result = false;
    $errors = [];

    //creamos el validador
    $validator = new Validator();
    //agregamos reglas
    $validator->add('title','required');
    $validator->add('content','required');

    if($validator->validate($_POST)){
      $blogPost = new BlogPosts([
        'title' => $_POST['title'],
        'content' => $_POST['content']
      ]);
    if ($_POST['img']) {
      $blogPost->img_url = $_POST['img'];
    }

      $blogPost->save();
  
      $result = true;
    }
    else{
      $errors = $validator->getMessages();
      // var_dump($errors);
    }


  // RENDER (POST)
  // ======================
  return $this->render('admin/insert-post.twig',
  [
    'result' => $result,
    'errors' => $errors
  ]);
  // ======================

  }
}

 ?>
