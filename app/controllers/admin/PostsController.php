<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPosts;
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

    $blogPost = new BlogPosts([
      'title' => $_POST['title'],
      'content' => $_POST['content']
    ]);
    $blogPost->save();

    $result = true;
    


  // RENDER (POST)
  // ======================
  return $this->render('admin/insert-post.twig',['result' => $result]);
  // ======================

  }
}

 ?>
