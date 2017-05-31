<?php 
	require_once('vendor/autoload.php');
	require_once('app/clases/google_auth.php');
	require_once('app/init.php');

	$googleClient = new Google_Client();
	$auth = new GoogleAuth($googleClient);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php if(!$auth->isLoggedIn()): ?>
			<a href="<?php echo $auth->getAuthUrl(); ?>">Inicia Sesion con google</a>
		<?php else ?>
			<a href="logout.php">Cerrar sesión</a>
		<?php endif ?>
</body>
</html>