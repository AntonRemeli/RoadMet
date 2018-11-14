<?php  
/*
Include JpGraph in your script. Note that jpgraph.php should reside in a directory that's present in your PHP INCLUDE_PATH, otherwise specify the full path yourself. 
*/   
require_once('../graph/jpgraph.php');  

    // Creating a new bar   
    $bplot = new BarPlot($xdata);   
      
    $bplot->SetLegend('Investments');   
      
    // Creating another bar   
    $bplot2 = new BarPlot($ydata);   
    $bplot2->SetLegend('Profit');   
      
    // Combining the bars   
    $accbplot = new AccBarPlot(array($bplot, $bplot2));   
    $accbplot->SetColor('darkgray');   
    $accbplot->SetWeight(1);   
      
    // Adding bars to the praphic  
    $graph->Add($accbplot);  
	?>