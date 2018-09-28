<?php
error_reporting(0);
	$userr=$_POST['username'];
	$passwrd=$_POST['password'];
	$user=array("user" => "lydia",
						"password" => "12345");

	if(isset($_POST["submit"])){
		if($userr==$user['user']&& $passwrd==$user['password']){
			echo "login".$userr."berhasil<br><br>";
			echo"<form method='POST'>;
					<input type='checkbox' name='hobi[]' value='shopping'> shopping<br>
					<input type='checkbox' name='hobi[]' value='nonton'> nonton<br>
					<input type='checkbox' name='hobi[]' value='skating'> skating<br>
					<input type='checkbox' name='hobi[]' value='futsal'> futsal<br><br>
					<input type='checkbox' name='hobi[]' value='travelling'> travelling<br><br>
					<input type='submit' name='submit2'>
				</form>";
		}
		else{
			echo "USERNAME DAN PASSWORD SALAH";
		}
	} 
?>

<?php 
	if(isset($_POST['submit2'])){
	$data = $_POST['hobi'];
	echo "hobby :";
	foreach ($data as $nilai) {
		echo "$nilai,";
	}
	echo"<br>Gambar : <br>";
	} 
?>
