<?php

  class Auth{

    protected static $allow = ['Facebook', 'Twitter', 'Google']; // redes

    protected static function issetRequest(){ // verificar que el servicio sea valido 

      if(isset($_GET['login'])){
        if(in_array($_GET['login'], self::$allow)){ 
          return true;
        }
      }
      return false;
    }

    public static function getUserAuth(){ // obtener informacion del usuauario despues de que de permisos 
      if(self::issetRequest()){
        $service = $_GET['login'];

        $hybridAuth = new Hybrid_Auth(__DIR__ . '/config.php');

        $adapter = $hybridAuth->authenticate($service);

        $userProfile = $adapter->getUserProfile();

        self::storeUser($service, $userProfile);

        //redirect user
        header('Location: index.php');
      }
    }

    protected static function storeUser($service, $socialUser){
      $db = new PDO("mysql:host=localhost;dbname=sociallogin", "root", "");

      $user = self::getExistingUser($socialUser, $db);

      if($user === null){

        $user = array(
          'name' => $socialUser->firstName,
          'email' => $socialUser->email
        );

        $ps = $db->prepare("INSERT INTO users (name, email) VALUES(:name, :email)");
        $ps->execute($user);

        $user['id'] = $db->lastInsertId();

        self::storeUserSocial($user, $socialUser, $service, $db);

      }else{

        if(!self::checkUserSocialService($user, $socialUser, $service, $db)){
          self::storeUserSocial($user, $socialUser, $service, $db);
        }

      }

      self::login($user);

    }

    protected static function getExistingUser($socialUser, $db){

      $ps = $db->prepare("SELECT id, name, email FROM users WHERE email = :email");
      $ps->execute([
        ':email' => $socialUser->email
      ]);

      $result = $ps->fetchAll(PDO::FETCH_ASSOC);

      return $result ? $result[0] : null;
    }


    protected static function storeUserSocial($user, $socialUser, $service, $db)
    {
      $ps = $db->prepare("INSERT INTO users_social (user_id, social_id, service) VALUES(:user_id, :social_id, :service)");
      $ps->execute([
      ':user_id' => $user['id'],
      ':social_id' => $socialUser->identifier,
      ':service' => $service
      ]);
    }

    protected static function checkUserSocialService($user, $socialUser, $service, $db){
      
      $ps = $db->prepare("SELECT * FROM users_social WHERE user_id = :user_id AND service = :service AND social_id = :social_id");
      $ps->execute([
      ':user_id' => $user['id'],
      ':service' => $service,
      ':social_id' => $socialUser->identifier
      ]);

      return (bool) $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function isLogin()
    {
      return (bool) isset($_SESSION['user']);
    }

    protected static function login($user)
    {
      $_SESSION['user'] = $user;
    }

    public static function logout()
    {
      if(self::isLogin()){
        unset($_SESSION['user']);
      }
    }

  }

 ?>
