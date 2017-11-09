<?php
  namespace App\Controllers;
  use Sirius\Validation\Validator;
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
    $validator.add('email','required');
    $validator.add('email','email');
    $validator.add('password','required');

    if($validator->validate($_POST)){
      //el where recibe el campo con el valor a comparar
      //el first devuelte solo el primer registro
      $user = User::where('email',$_POST['email'])->first();
      if($user){
        if(password_verify($_POST['password'], $user->password)){
          //usuario autenticado con exito
          //c
          $this->render('index.twig');
        }
      }
      //error de autenticacion
      $validator->addMessage('email', 'Username and/or password does not match');
      //vulnerabilidad del listado de usuarios???
    }

    $errores = $validator->getMessages();
    return $this->render('login.twig',[
      'errors' => $errors
    ]);
  }
}

 ?>
