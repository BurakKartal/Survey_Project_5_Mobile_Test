
<html lang="en">
<head>
	<title> LOGIN </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Style-Type" content="text/css;">
	<meta name="viewport" content="width=320;initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet" href="survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
	<link rel="stylesheet" href="index.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
	<script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
</head>


<body>
<div id="page" class="page">
	<div id="e12" class="page_box"></div>
	<span id="e11" class="info_box"></span>
	<span id="e10" class="logo_box"></span>
	<h1 id="e9" class="header">
		LOGIN
	</h1>
<form id="f8" action="loginproc.php" method="post" onsubmit="return weCheckForm(this)">
<fieldset id="e8" class="cc01">
	<label id="e7" class="cc02" for="e6">
		Name
	</label>
	<input id="e6" class="cc03" type="text" name="username" title="Name" size="23"><br>
	<label id="e5" class="cc02" for="e3">
		Password
	</label><br>
	<input id="e4" class="cc02" type="submit" title="Send Details" value="Send Details">
	<input id="e3" class="cc04" type="password" name="password" size="23"><br>
	<label id="e2" class="cc05">
		<a href="registration.php">
		Registration</a>
	</label><br>
	<label id="e1" class="cc05">
		<a href="home.php">
		Please Enter</a>
	</label>
</fieldset>
</form>
</div>
</body>
</html>
