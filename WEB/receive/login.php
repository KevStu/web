<?php
include_once 'config/config.php';
include_once 'class/cuser.php';

$user = new User();
if($user->get_session()){
    header("location: index.php");
}
if (isset($_REQUEST['submit'])){ ///to be chane to submit
    extract($_REQUEST);
    $submit = $user->check_login($useremail,$password); ///to be change <---username
    if($submit){
        header("location: index.php");
    }else{
        ?>
        <div id='error_notif'>Wrong username or password</div>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>WEEB APP</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css?<?php echo time();?>">
</head>

<body>
<center>
    <div id="brand-block">
        <h2> Manapla Petshop & Feeds Supplies</h2>
    </div>
    <div id="login-block">
        <h3> Login</h3>
	<form method="POST" action="" name="login">
	<div>
		<input type="email" class="input" required name="useremail" placeholder="Email"/> 
	</div>
	<div>
		<input type="password" class="input" required name="password" placeholder="Password"/>
	</div>
    <br>
	<div>
		<input type="submit" name="submit" value="Submit"/>
	</div>
</center>
	</form>
</div>
</body>
</html>