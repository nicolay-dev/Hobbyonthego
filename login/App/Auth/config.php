<?php
// aqui van las key de las appis 
  return

  array(
    "base_url" => "../../hydridauth.php", // imprat el hydridauth.php
    "providers" => array( // array de las redes socciales a implementar 
      "Twitter" => array(
        "enabled" => true, //habilitar o no la red social 
        "keys" => array(   // keys del appi  
          "key" => "",
          "secret" => ""
        ),
        "includeEmail" => true // ver el email del usuario  (recuperarlo)
      ),
      "Facebook" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "248207258994713",
          "secret" => "42d1622ba91196adb6f0c0078f8ee61e"
        ),
        "scope" => "email"
      ),
      "Google" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "731761216147-f7c7ds6ijar4ef0ss250316s048ftfih.apps.googleusercontent.com",
          "secret" => "IsJgXRxf1FH96aiCG-z619iD"
        )
      )
    )
  )

 ?>
