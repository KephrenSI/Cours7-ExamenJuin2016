<?php
function getLogin()
{
    return ['view' => 'views/login.php'];
}

function postLogin()
{
	$email = $_POST['email'];

    $password = sha1($_POST['password']);
	
	include 'models/authModel.php';
	
	if($user = checkUser( $email, $password )) {
		$_SESSION['user'] = $user;
		header('Location: http://homestead.app'.$_SERVER['PHP_SELF'].'?a=index&?r=task');
	}
	exit;
}

