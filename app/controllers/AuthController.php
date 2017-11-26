<?php
  namespace App\Controllers;
  use App\Controllers\BaseController;
  use Sirius\Validation\Validator;
  use App\Models\User;
  use App; //para la clase Log
/**
 * ESTE ES EL CONTROLADOR PARA LA RUTA INDEX '/'
 */
class AuthController Extends BaseController //para obtener la funcion de render
{

  public function getLogin()
  {
    return $this->render('login.twig');
  }
  public function postLogin()
  {
    $validator = new Validator();    
    $validator->add('email','required');
    $validator->add('email','email');
    $validator->add('password','required');

    if($validator->validate($_POST)){
      //el where recibe el campo con el valor a comparar
      //el first devuelte solo el primer registro
      $user = User::where('email',$_POST['email'])->first();
      if($user){
        if(password_verify($_POST['password'], $user->password)){
          //usuario autenticado con exito
          $_SESSION['userId'] = $user->id;

          //guardamos un log informativo
          Log::logInfo('Login userId: '. $user->id);

          //creamos un encabezado en la respuesta
          header('Location:' . BASE_URL . 'admin');
        }
      }
      //error de autenticacion
      $validator->addMessage('email', 'Username and/or password does not match');
      //vulnerabilidad del listado de usuarios???
    }

    $errors = $validator->getMessages();
    return $this->render('login.twig',[
      'errors' => $errors
    ]);
  }

  public function getLogout(){
    unset($_SESSION['userId']);
    header('Location: ' . BASE_URL . 'auth/login');
  }
}

 ?>
