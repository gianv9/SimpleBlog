<?php

use App\Controllers\BaseController;
use App\Models\BlogPosts;

class PostsController extends BaseController
{
    public function getInfo($params){
        $this->render('blog-posts.twig',[ 'params' => $params]);
    }
}
