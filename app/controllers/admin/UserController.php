<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController {

    //Metodo para obtener el listado de usuarios
    public function getIndex(){
        $users = User::all();
        return $this->render('admin/users.twig', [
            'users' => $users
        ]);
    }
    //metodo para desplegar el formulario
    public function getCreate(){
        return $this->render('admin/insert-user.twig');
    }
    //metodo para obtener los valores del formulario
    public function postCreate(){

    }
}