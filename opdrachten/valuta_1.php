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
				<h1>Valuta 1</h1>
			</div>
			
			<div role="main" class="ui-content">
				<p>Met deze WebApp kun je valuta omrekenen naar euro's.</p>
				<form action="valuta_1.php" method="post">
					<label for="bedrag">Bedrag:</label>
					<input name="bedrag" id="bedrag" type="range" min="1" max="1000" step="1" value="500" data-highlight="true">	
					
						<legend>Welke valuta lever je in:</legend>
						<input type="radio" name="valutaknopje" id="dollar" value="dollar">
						<label for="dollar">Am.Dollar</label>
						<input type="radio" name="valutaknopje" id="pond" value="pond">
						<label for="pond">Eng.Pond</label>
						<input type="radio" name="valutaknopje" id="yen" value="yen">
						<label for="yen">Jap.Yen</label>
				
					<label class="ui-hidden-accessible" for="bereken">Bereken:</label>
					<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="bereken" type="submit" name="bereken">BEREKEN</button>
					
					<?php
					
					if(isset($_POST["bereken"])) {
					    $bedrag = $_POST["bedrag"];
					    $valutaknopje = $_POST["valutaknopje"];
					    
					    if($valutaknopje == "dollar") {
					        $euro = $bedrag * 0.8182;
					        print "$ $bedrag = € $euro";
					    }
					    elseif($valutaknopje == "pond") {
					        $euro2 = $bedrag * 1.1337;
					        print "£ $bedrag = € $euro2";
					    }
					    elseif($valutaknopje == "yen") {
					        $euro3 = $bedrag * 0.0074;
					        print "¥ $bedrag = € $euro3";
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