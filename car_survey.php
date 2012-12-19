
<html lang="en">
<head>
	<title> CAR SURVEY </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Style-Type" content="text/css;">
	<meta name="viewport" content="width=320;initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet" href="survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
	<link rel="stylesheet" href="car_survey.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
	<script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
</head>


<body>
<div id="page" class="page">
	<div id="e26" class="page_box"></div>
	<span id="e25" class="info_box"></span>
	<span id="e24" class="logo_box"></span>
	<h1 id="e23" class="header">
		Car Survey
	</h1>
<form id="f22" action="car_result.php" method="post" onsubmit="return weCheckForm(this)">
<fieldset id="e22" class="cc14">
	<legend id="e21" class="cc15">
		Vehicle Details
	</legend><br>
	<label id="e20" class="cc16" for="e19">
		Type of Car
	</label>
	<select id="e19" class="cc17" size="1" name="Car_Type" title="Type of Car">
	<option> Sedan</option>
	<option> Wagon</option>
	<option> Sports</option>
	<option> Van</option>
	<option> Other</option>
	</select><br>
	<label id="e18" class="cc16" for="e17">
		Seats
	</label>
	<select id="e17" class="cc17" size="1" name="Seats" title="Seats">
	<option> 2</option>
	<option> 4</option>
	<option> 5</option>
	<option> 7</option>
	<option> Other</option>
	</select><br>
	<label id="e16" class="cc16" for="e15">
		Doors
	</label>
	<select id="e15" class="cc17" size="1" name="Doors" title="Doors">
	<option> 2</option>
	<option> 3</option>
	<option> 4</option>
	<option> 5</option>
	<option> Other</option>
	</select><br>
	<label id="e14" class="cc16" for="e13">
		Cylinders
	</label>
	<select id="e13" class="cc17" size="1" name="Cylinders" title="Cylinders">
	<option> 4</option>
	<option> 6</option>
	<option> 8</option>
	<option> &gt;8</option>
	<option> Other</option>
	</select><br>
	<label id="e12" class="cc16" for="e11">
		Fuel
	</label>
	<select id="e11" class="cc17" size="1" name="Fuel" title="Fuel">
	<option> Gas</option>
	<option> LPG</option>
	<option> Diesel</option>
	<option> Electric</option>
	<option> Other</option>
	</select><br>
	<label id="e10" class="cc16" for="e9">
		Age of Car
	</label>
	<select id="e9" class="cc17" size="1" name="Age_Of_Car" title="Age of Car">
	<option> 1-3 years</option>
	<option> 3-6 years</option>
	<option> 6-10 years</option>
	<option> &gt;10 years</option>
	</select><br>
	<label id="e8" class="cc16" for="e7">
		Colour
	</label>
	<select id="e7" class="cc17" size="1" name="Color" title="Colour">
	<option> Black</option>
	<option> White</option>
	<option> Red</option>
	<option> Blue</option>
	<option> Yellow</option>
	<option> Green</option>
	<option> Silver</option>
	<option> Other</option>
	</select><br>
	<label id="e6" class="cc16" for="e5">
		Transmission
	</label>
	<select id="e5" class="cc17" size="1" name="Transmission" title="Transmission">
	<option> Manual</option>
	<option> Automatic</option>
	</select><br>
	<label id="e4" class="cc16" for="e3">
		Engine Position
	</label>
	<select id="e3" class="cc17" size="1" name="Engine_Position" title="Engine Position">
	<option> Front</option>
	<option> Middle</option>
	<option> Rear</option>
	</select><br>
	<input id="e2" class="cc17" type="submit" title="Send Details" value="Send Details">
	<input id="e1" class="cc17" type="reset" title="Clear Details" value="Clear Details">
</fieldset>
</form>
</div>
</body>
</html>
