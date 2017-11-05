<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class UserControlles extends BaseController {

    //Metodo para obtener el listado de usuarios
    public function getIndex(){
        $users = User::all();
        return $this->render('', [
            'users' => $users
        ]);
    }

}