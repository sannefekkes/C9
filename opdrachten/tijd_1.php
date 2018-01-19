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
            <h1>Tijd 1</h1>
         </div>
      
    <div role="main" class="ui-content">
        <p>Met deze WebApp uren, minuten en seconden omrekenen naar seconden.</p>
        
        <form action="tijd_1.php" method="get" >
            <label for="uren">Aantal uren:</label>
            <input type="range" name="uren" id="uren" value="0" min="0" max="23" data-highlight="true">
            <label for="minuten">Aantal minuten:</label>
            <input type="range" name="minuten" id="minuten" value="0" min="0" max="59" data-highlight="true">
            <label for="seconden">Aantal seconden:</label>
            <input type="range" name="seconden" id="seconden" value="0" min="0" max="59" data-highlight="true">
            
            <!-- gekopieerd van de webapp van informatica-actief -->
            <label class="ui-hidden-accessible" for="bereken">Bereken:</label>
			<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="bereken" type="submit" name="bereken">BEREKEN</button>
        
        <?php
        
        if(isset($_GET["bereken"])) {
            $uren = $_GET["uren"];
            $uren *= 3600;
            $minuten = $_GET["minuten"];
            $minuten *= 60;
            $seconden = $_GET["seconden"];

            $totaal_seconden = $uren + $minuten + $seconden;
            print "$uren + $minuten + $seconden = $totaal_seconden";
        }
        
        ?>
        
        
        
        </form>
        </div>
        
  </div>
</body>
</html>