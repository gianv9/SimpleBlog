<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogPosts;

class PostsController extends BaseController
{
    //funcion que recibe el ID del blogpost
    public function getIndex($arg = null){
        //buscamos el blogpost con el id $arg
        $blog_post = BlogPosts::where('id',$arg)->first();
        //renderizamos el detalle del blogpost
        return $this->render('blog-post.twig',
            [ 
                'blog_post' => $blog_post ,
                'arg' => $arg
            ]
        );
    }

}

?>