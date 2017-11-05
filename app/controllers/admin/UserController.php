<?php

namespace App\Controllers\Admin;

class UserControlles extends BaseController {

    //Metodo para obtener el listado de usuarios
    public function getIndex(){
        $users = User::all();
        return $this->render('', [
            'users' => $users
        ]);
    }

}