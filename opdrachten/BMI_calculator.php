<!DOCTYPE html>
<html>
<head>
  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/themes/watermeloen.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="src/jquery-1.11.1.min.js"></script> 
  <script src="src/jquery.mobile-1.4.5.min.js"></script> 
</head>
<body>
    
    <div id="pag1" data-role="page">
			<div data-role="header">
				<h1>BMI calculator</h1>
			</div>
			
			<div role="main" class="ui-content">
				<p>Gebruik de BMI-calculator om uw ideale gewicht te bepalen</p>
				
				<form action="BMI_calculator.php" method="get">
					<label for="gewicht">Gewicht (kg):</label>
					<input name="gewicht" id="gewicht" type="range" min="30" max="200" step="1" value="60" data-highlight="true">	
					<label for="lengte">Lengte (cm):</label>
					<input name="lengte" id="lengte" type="range" min="130" max="230" step="1" value="160" data-highlight="true">
					<label class="ui-hidden-accessible" for="bereken">Bereken:</label>
					<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="bereken" type="submit" name="bereken">Bereken BMI</button>
				
				<?php
				
				if(isset($_GET["bereken"])) {
				    $lengte1 = $_GET["lengte"];
				    $lengte = $lengte1 / 100; // om er meters van te maken
				    $gewicht = $_GET["gewicht"];
				    
				    $BMI = $gewicht / ($lengte * $lengte);
				    
				    print "Uw BMI is ";
				    print round($BMI, 1);
				    
				    if($BMI > 0 & $BMI < 18.5) {
				        print "... U heeft ondergewicht!";
				        print "<img src= 'images/ondergewicht.jpg' style= 'max-width:100%;' />";
				    }
				    
				    if($BMI >= 18.5 & $BMI < 25) {
				        print "... U heeft een goed gewicht!";
				        print "<img src= 'images/goed_gewicht.jpg' style= 'max-width:100%;' />";
				    }
				    
				    if($BMI >= 25 & $BMI < 27) {
				        print "... U heeft lichtelijk overgewicht!";
				        print "<img src= 'images/licht_overgewicht.jpg' style= 'max-width:100%;' />";
				    }
				    
				    if($BMI >= 27 & $BMI < 30) {
				        print "... U heeft matig overgewicht!";
				        print "<img src= 'images/matig_overgewicht.jpg' style= 'max-width:100%;' />";
				    }
				    
				    if($BMI >= 30 & $BMI < 40) {
				        print "... U heeft ernstig overgewicht!";
				        print "<img src= 'images/ernstig_overgewicht.jpg' style= 'max-width:100%;' />";
				    }
				    
				    if($BMI >= 40) {
				        print "... U heeft obesitas!";
				        print "<img src= 'images/obesitas.jpg' style= 'max-width:100%;' />";
				    }
				}
				
				?>
				
				
				
				</form>
								
			</div>
			<div data-role="footer" data-position="fixed">
				<h3>&copy; INF-actief</h3>
			</div>
		</div>
  </body>
</html>