
<html lang="en">
<head>
	<title> MOVIE SURVEY </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Style-Type" content="text/css;">
	<meta name="viewport" content="width=320;initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet" href="survey_g.css" type="text/css" media="screen,projection,print">	<!--// Document Style //-->
	<link rel="stylesheet" href="movie_survey.css" type="text/css" media="screen,projection,print">	<!--// Page Style //-->
	<script src="survey_g.js" type="text/javascript"></script>		<!--// Document Script //-->
</head>


<body>
<div id="page" class="page">
	<div id="e36" class="page_box"></div>
	<span id="e35" class="info_box"></span>
	<span id="e34" class="logo_box"></span>
	<h1 id="e33" class="header">
		Movie Survey
	</h1>
<form id="f32" action="movie_result.php" method="post" onsubmit="return weCheckForm(this)">
<fieldset id="e32" class="cc21">
	<label id="e31" class="cc22" for="e30">
		How often do you go to the movies?
	</label>
	<select id="e30" class="cc23" size="1" name="Movie_Frequency" title="How often do you go to the movies?">
	<option> More than once a week</option>
	<option> Once a week</option>
	<option> Once a month</option>
	<option> Every two months</option>
	<option> Every six months</option>
	<option> Less often</option>
	</select><br>
	<label id="e29" class="cc24">
		Favourite Movie Genres
	</label><br>
	<input id="e28" class="cc23" type="checkbox" name="Favorie_Movie_All" title="All">
	<label id="e27" class="cc23" for="e28">
		All
	</label>
	<input id="e26" class="cc23" type="checkbox" name="Favorie_Movie_Action" title="Action">
	<label id="e25" class="cc23" for="e26">
		Action
	</label><br>
	<input id="e24" class="cc23" type="checkbox" name="Favorie_Movie_Adventure" title="Adventure">
	<label id="e23" class="cc23" for="e24">
		Adventure
	</label>
	<input id="e22" class="cc23" type="checkbox" name="Favorie_Movie_Childrens" title="Children's">
	<label id="e21" class="cc23" for="e22">
		Children's
	</label><br>
	<input id="e20" class="cc23" type="checkbox" name="Favorie_Movie_Comedy" title="Comedy">
	<label id="e19" class="cc23" for="e20">
		Comedy
	</label>
	<input id="e18" class="cc23" type="checkbox" name="Favorie_Movie_Documentary" title="Documentary">
	<label id="e17" class="cc23" for="e18">
		Documentary
	</label><br>
	<input id="e16" class="cc23" type="checkbox" name="Favorie_Movie_Drama" title="Drama">
	<label id="e15" class="cc23" for="e16">
		Drama
	</label>
	<input id="e14" class="cc23" type="checkbox" name="Favorie_Movie_Family" title="Family">
	<label id="e13" class="cc23" for="e14">
		Family
	</label><br>
	<input id="e12" class="cc23" type="checkbox" name="Favorie_Movie_Horror" title="Horror">
	<label id="e11" class="cc23" for="e12">
		Horror
	</label>
	<input id="e10" class="cc23" type="checkbox" name="Favorie_Movie_Romance" title="Romance">
	<label id="e9" class="cc23" for="e10">
		Romance
	</label><br>
	<input id="e8" class="cc23" type="checkbox" name="Favorie_Movie_Science_Fiction" title="Science Fiction">
	<label id="e7" class="cc23" for="e8">
		Science Fiction
	</label>
	<input id="e6" class="cc23" type="checkbox" name="Favorie_Movie_Thriller" title="Thriller">
	<label id="e5" class="cc23" for="e6">
		Thriller
	</label><br>
	<input id="e4" class="cc23" type="checkbox" name="Contact_Me_About_Movies" title="Contact me from time to time about movies that match my selection" checked="checked">
	<label id="e3" class="cc23">
		Contact me from time to time about movies that match my selection
	</label><br>
	<input id="e2" class="cc23" type="submit" title="Send Details" value="Send Details">
	<input id="e1" class="cc23" type="reset" title="Clear Details" value="Clear Details">
</fieldset>
</form>
</div>
</body>
</html>
