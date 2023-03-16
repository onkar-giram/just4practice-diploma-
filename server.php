<?php 
	session_start();

	$username = "";
	$email    = "";
	$password1 = "";
	
	//$dbname = "id13703797_ganeshabansa";
	//$db = mysqli_connect("localhost","id13703797_ganeshabansa007",'[-Pa6[7$|2~N$JbH', $dbname);

	$db = mysqli_connect('localhost', 'root', '', 'test');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password']);

		$query = "INSERT INTO user (name, email, password)VALUES('$username', '$email', '$password1')";
		
		if (mysqli_query($db, $query)) {
			$_SESSION['username'] = $email;
			header('location: home.php');	
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Email is already register")';
			echo '</script>';
		}
	}
	
	// LOGIN USER
	if (isset($_POST['login_user'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password1 = mysqli_real_escape_string($db, $_POST['password']);

		$query = "SELECT * FROM user WHERE email like '$username' AND password like '$password1'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {

			$_SESSION['username'] = $username;
			$query = "INSERT INTO logins (email) VALUES ('$username')";
			mysqli_query($db, $query);
			header('location: home.php');
		
		}else {
			echo '<script language="javascript">';
			echo 'window.alert("Wrong E-mail/password combination")';
			echo '</script>';
		}
	}
?>