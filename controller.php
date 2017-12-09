<?php
// session_start();
require_once('class.user.php');
$user = new USER();

if(isset($_POST['create']))
{
	$uname = strip_tags($_POST['name']);
	$umail = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
	$photo = $_POST['photo'];	
	
	if($uname=="")	{
		$error[] = "provide username !";
	}
	else if($umail=="")	{
		$error[] = "provide email id !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($message=="")	{
		$error[] = "provide password !";
	}
	else if($photo=="")	{
		$error[] = "provide your photo !";
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT name, email,message FROM christmas WHERE  email=:umail");
			$stmt->execute(array(':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			// if($row['name']==$uname) {
			// 	$error[] = "sorry username already has message !";
			// }
			// else 
			if($row['email']==$umail) {
				$user->redirect('index.php?message='.$row['string']);
			}
			else
			{
				$string = $user->generate_random_string();
				if($user->register($uname,$umail,$message,$photo,$string)){	
					$user->redirect('index.php?message='.$string);
					//registration successfull
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}
?>