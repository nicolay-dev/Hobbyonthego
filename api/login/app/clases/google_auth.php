<?php 

	class GoogleAuth{
		protected $client;

		public function _construct(Google_Client $googleCLient = null){
			$this->client = $googleClient;
			if($this->client){
				$this->client->setClientId('1097482111320-36t3kg6iqguqegbg9tvqfti3o5ce2eq6.apps.googleusercontent.com');
				$this->client->setClientSecret('29Cu-kLmHqBdpxvTRWNkWFQW');
				$this->client->setRedirectUri('https://gohobby.000webhostapp.com/login.html'); //donde se redirecciona una vez autenticao copiado de credenciales de google
				$this->client->setScopes('email');
			}
		}



		public function isLoggedIn(){
			return isset($_SESSION['acces_token']);
		}


		public function getAuthUrl(){
			return this->client->createAuthUrl();
		}
	}

 ?>