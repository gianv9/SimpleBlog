<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\User;
use Sirius\Validation\Validator;

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
        //inicializamos variable de errores
        $errors = [];
        $result = false;

        //agregamos validaciones
        $validator = new Validator();
        $validator->add('name', 'required');
        $validator->add('email', 'required');
        //verificamos el formato de email
        $validator->add('email', 'email');
        $validator->add('password', 'required');

        if($validator->validate($_POST)){
            //agregamos el usuario
            $user = new User();
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];

            //generamos password seguros
            $user->password = \password_hash($_POST['password'],PASSWORD_DEFAULT);
            $user->save();
            $result = true;
        }
        else{
            //no se agrego
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-user.twig',[
            'result' => $result,
            'errors' => $errors
        ]);
    }
}