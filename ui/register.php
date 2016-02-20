<?php
if($_POST["reg_username"] && $_POST["reg_email"] && $_POST["reg_password"] && $_POST["reg_password2"] )
{
	if($_POST["reg_password"]==$_POST["reg_password2"])
	{
/*		$servername="localhost";
		$username="root";*/
		include $_SERVER['DOCUMENT_ROOT'] . '/favoroutes/config/connect_inc.php';

		try
		{
			$sql = 'INSERT INTO users SET

			name = :name,
			password = :password,
			email = :email
			';

			$s = $pdo->prepare($sql);
			$s->bindValue(':name', $_POST["reg_username"]);
			$s->bindValue(':password', $_POST["reg_password"]);
			$s->bindValue(':email', $_POST["reg_email"]);
			$s->execute();
		}
		catch (PDOException $e)
		{
			$error = 'Error adding user: '.$e->getMessage();
			include $_SERVER['DOCUMENT_ROOT'].'/test/includes/error_inc.php';
			exit();
		}
		


		print "<h1>you have registered sucessfully</h1>";

		print "<a href='index.php'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
else print"invaild data";
?>