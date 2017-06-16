<?php

session_start();

// $users = [
	// ['username' => 'admin', 'password' => 'secret'],
// 	['username' => 'mark', 'password' => 'password'],
// 	['username' => 'guest', 'password' => 'guest']

// ];

if(isset($_POST['login'])){
	foreach ($users as $user) {
		if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password'])
			header('location:homepage.php');
	else {
		echo "Log In failed!";
		break;
	}
}
}

// $fp = fopen('users.json', 'w');
// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
// fclose($fp);

$string = file_get_contents('users.json');
$users = json_decode($string, true);

function display_users($arr) {
	foreach ($arr as $val) {
		$username = $val['username'];
		$password = $password['password'];
	
		echo "
		<div>
		$username<br>
		$password<br>
		</div>
		";
	}
}

if(isset($_POST['register'])){
	$new_user = [];

	$new_user['name'] = $_POST['username'];
	$new_user['password'] = $_POST['password'];

	$users[] = $new_user;

	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	fclose($fp);

}
	
?>
