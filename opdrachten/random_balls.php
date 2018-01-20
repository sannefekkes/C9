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
				<h1>Random Balls</h1>
			</div>
			
			<div role="main" class="ui-content">
				Deze WebApp simuleert het trekken van gekleurde ballen MET teruglegging.
				
				<form action="random_balls.php" method="get">
					<label for="rode_ballen">Aantal RODE ballen in de bak:</label>
					<input name="rode_ballen" id="rode_ballen" type="range" min="1" max="9" step="1" value="5" data-highlight="true">
					<label for="blauwe_ballen">Aantal BLAUWE ballen in de bak:</label>
					<input name="blauwe_ballen" id="blauwe_ballen" type="range" min="1" max="9" step="1" value="5" data-highlight="true">
					<label for="totaal_ballen">Totaal aantal ballen die je wilt trekken:</label>
					<input name="totaal_ballen" id="totaal_ballen" type="range" min="1" max="100" step="1" value="50" data-highlight="true">					
					<label class="ui-hidden-accessible" for="simuleer">Simuleer:</label>
					<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="simuleer" type="submit" name="simuleer">SIMULEER</button>
					
					<?php
					
					if(isset($_GET["simuleer"])) {
					    $rood = $_GET["rode ballen"];
					    $blauw = $_GET["blauwe_ballen"];
					    $blauw2 = 0;
					    $rood2 = 0;
					    $totaal = $_GET["totaal_ballen"];
					    $simuleer = $rood + $blauw;
					    while($totaal > 0) {
					        $rand = rand(1, $simuleer);
					        if($rand < $blauw) {
					            $blauw2++;
					            print " B ";
					        }
					        elseif(rand > $blauw) {
					            $rood2++;
					            print " R ";
					        }
					        $totaal--;
					    }
					    print "<br>Aantal getrokken rode ballen: $rood2<br>";
					    print "Aantal getrokken blauwe ballen: $blauw2";
					    
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