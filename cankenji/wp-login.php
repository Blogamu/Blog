<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ca">
<head>
	<title>Can Kenji &rsaquo; Entra</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' id='login-css'  href='https://cankenji.com/cankenji/wp-admin/css/login.css?ver=20110121' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='https://cankenji.com/cankenji/wp-admin/css/colors-fresh.css?ver=20110121' type='text/css' media='all' />
<script type='text/javascript' src='https://cankenji.com/cankenji/wp-includes/js/l10n.js?ver=20101110'></script>
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">
<div id="login"><h1><a href="http://wordpress.org/" title="Funcionant amb el WordPress">Can Kenji</a></h1>

<form name="loginform" id="loginform" action="https://cankenji.com/cankenji/wp-login.php" method="post">
	<p>
		<label>Nom d'usuari<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Contrasenya<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Recorda&#039;m</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Entra" tabindex="100" />
		<input type="hidden" name="redirect_to" value="https://cankenji.com/cankenji/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="https://cankenji.com/cankenji/wp-login.php?action=lostpassword" title="Recuperació de la contrasenya perduda">Heu perdut la contrasenya?</a>
</p>
</div>
<p id="backtoblog"><a href="https://cankenji.com/cankenji/" title="Us heu perdut?">&larr; Torna cap a Can Kenji</a></p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
</body>
</html>
