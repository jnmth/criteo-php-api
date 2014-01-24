<?php

//pChart 2.0 
 
  require_once "pChart/class/pDraw.class.php";
  require_once "pChart/class/pImage.class.php";
  require_once "pChart/class/pData.class.php";
  
  
//dimensions: ad placement
	$place = array();
	
//2nd: date
	$day = array();

//values: Total Requested Impressions. Impressions taken by Criteo.
	
	$tri = array();
	$imp = array();


$csv = 'dataset.csv';
$file_handle = fopen($csv, "r");

	
// get all values in column


while (!feof($file_handle) ) {
       
		$line_of_text = fgetcsv($file_handle, 1024, ";");
    array_push($day, $line_of_text[4]);

           		/*array_push($place, $line_of_text[3]);
           			array_push($perc, $line_of_text[7]);
			        	array_push($tri, $line_of_text[5]);
			        	array_push($imp, $line_of_text[5]);*/
    
			}

fclose($file_handle);

//get set of dates:

  $day_out = array_slice($day, 1, 7); 


// ---------------------get data for each day------------------------//

 // look for the date written as the first one
 //line 2, cell [4]
 
 //------!!!-------on each file_handle open the csv is read from its first line again---------------//
 
 // -7 days
	$file_handle = fopen($csv, "r");
	$tri_7 = array();
	
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4];                         #1st date saved
		
		array_push($tri_7, $line_of_text[5]);             #first value saved elsewhere
//now run thru the file and save all values for matching dates
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_7, $line_of_text[5]);
			}
			
		}
	
	fclose($file_handle);


//now do as before, just get the init date one line after the last time
	// -6
	$file_handle = fopen($csv, "r");
	$tri_6 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";"); 
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; 
		array_push($tri_6, $line_of_text[5]); 
	
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_6, $line_of_text[5]);
			}
			
		}
		
	fclose($file_handle);
	
	// -5
	$file_handle = fopen($csv, "r");
	$tri_5 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($tri_5, $line_of_text[5]); #a k nemu prvni impr
		
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_5, $line_of_text[5]);
			}
			
		}
		
	fclose($file_handle);
	
	
	// -4
	$file_handle = fopen($csv, "r");
	$tri_4 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($tri_4, $line_of_text[5]); 
	
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_4, $line_of_text[5]);
			}
			
		}
	
	fclose($file_handle);
	
	
	
	// -3
	$file_handle = fopen($csv, "r");
	$tri_3 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($tri_3, $line_of_text[5]); 
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_3, $line_of_text[5]);
			}
			
		}
	
	fclose($file_handle);
	// -2
	$file_handle = fopen("test.csv", "r");
	$tri_2 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($tri_2, $line_of_text[5]); #a k nemu prvni impr
	
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_2, $line_of_text[5]);
			}
			
		}
	
	fclose($file_handle);
	
	
	// -1
	$file_handle = fopen("test.csv", "r");
	$tri_1 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($tri_1, $line_of_text[5]); 

		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($tri_1, $line_of_text[5]);
			}
			
		}
	
	fclose($file_handle);

//----------------------- data processing ----------------------------//

/*
function average($arr)
		  {
		    if (!is_array($arr)) return false;
    		return array_sum($arr)/count($arr);
	  	}
*/

//sum values for each day over the different placements
// === see how the table generated from csv is formatted...

	$tri1s = array_sum($tri_1);
	$tri2s = array_sum($tri_2);
	$tri3s = array_sum($tri_3);
	$tri4s = array_sum($tri_4);
	$tri5s = array_sum($tri_5);
	$tri6s = array_sum($tri_6);
	$tri7s = array_sum($tri_7);
	
// put the day sums in an array	to use it for the chart
	$trita = array(
	$tri1s,
	$tri2s,
	$tri3s,
	$tri4s,
	$tri5s,
	$tri6s,
	$tri7s,
	);
	
//total sum over the week

	$trit = array_sum($trita);
	
	
	
//round anything if necessary
	
/*
  $i=0;
    while(!empty($trita[$i])) {
    	$c[$i] = round($trita[$i], 2);
    	++$i;
    }
*/



// ---------------------get data for each day   SECOND RND ------------------------//

 // hledej prvni datum
 // -7
	$file_handle = fopen("test.csv", "r");
	$imp_7 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_7, $line_of_text[6]); #a k nemu prvni imp
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_7, $line_of_text[6]);
			}
			
		}
	#print_r($imp_7);		
	fclose($file_handle);
	
	// -6
	$file_handle = fopen("test.csv", "r");
	$imp_6 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_6, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_6, $line_of_text[6]);
			}
			
		}
	#print_r($imp_6);		
	fclose($file_handle);
	
	// -5
	$file_handle = fopen("test.csv", "r");
	$imp_5 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_5, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_5, $line_of_text[6]);
			}
			
		}
	#print_r($imp_5);		
	fclose($file_handle);
	// -4
	$file_handle = fopen("test.csv", "r");
	$imp_4 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_4, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_4, $line_of_text[6]);
			}
			
		}
	#print_r($imp_4);		
	fclose($file_handle);
	// -3
	$file_handle = fopen("test.csv", "r");
	$imp_3 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_3, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_3, $line_of_text[6]);
			}
			
		}
	#print_r($imp_3);		
	fclose($file_handle);
	// -2
	$file_handle = fopen("test.csv", "r");
	$imp_2 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_2, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_2, $line_of_text[6]);
			}
			
		}
	#print_r($imp_2);		
	fclose($file_handle);
	// -1
	$file_handle = fopen("test.csv", "r");
	$imp_1 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_1, $line_of_text[6]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($imp_1, $line_of_text[6]);
			}
			
		}
	#print_r($imp_1);		
	fclose($file_handle);
	#echo "---------------------------";

//----------------------- data processing ----------------------------//	

	$imp1s = array_sum($imp_1);
	$imp2s = array_sum($imp_2);
	$imp3s = array_sum($imp_3);
	$imp4s = array_sum($imp_4);
	$imp5s = array_sum($imp_5);
	$imp6s = array_sum($imp_6);
	$imp7s = array_sum($imp_7);
	
	
	$impta = array(
	$imp1s,
	$imp2s,
	$imp3s,
	$imp4s,
	$imp5s,
	$imp6s,
	$imp7s,
	);
	$impt = array_sum($impta);
	#echo "------------impta---------------";
	#print_r($impta);
	#echo "--------------konec-------------";
	#echo $impt;
	
	

	//zaokrouhlovani
/*	
$i=0;
while(!empty($impta[$i])) {
	$imptar[$i] = round($impta[$i], 2);
	++$i;
}*/


//-------------------------------------------------------------------//
//                    now build the fucking chart
//-------------------------------------------------------------------//



 $MyData = new pData();   
  $MyData->loadPalette("pChart/palettes/shade.color",TRUE); 
  
    $MyData->addPoints($trita,"Total impressions"); 
    $MyData->addPoints($impta,"Taken impressions"); 
    $MyData->setSerieWeight("Taken impressions",4);
        $MyData->setAxisName(0,"Impressions"); 
    
    $MyData->addPoints($day_out,"Day"); 
    $MyData->setSerieDescription("Day","Day"); 
    $MyData->setAbscissa("Day"); 
 
//chart area
 $myPicture = new pImage(700,430,$MyData); 
  $myPicture->setFontProperties(array("FontName"=>"pChart/fonts/calibri.ttf","FontSize"=>8)); 

 $myPicture->setGraphArea(50,30,700,400); 
   $myPicture->drawScale(array("CycleBackground"=>TRUE,"DrawSubTicks"=>FALSE,"GridR"=>0,"GridG"=>0,"GridB"=>0,"GridAlpha"=>10)); 
 

 $settings = array("Floating0Serie"=>"Floating 0","Draw0Line"=>TRUE,"Gradient"=>TRUE,"DisplayPos"=>LABEL_POS_INSIDE,"DisplayValues"=>FALSE,
 "DisplayR"=>0,"DisplayG"=>0,"DisplayB"=>0,"DisplayShadow"=>TRUE,"Surrounding"=>10); 
 
 $myPicture->Antialias = TRUE; 

//get line charts for both
 $MyData->setSerieDrawable("Taken impressions",TRUE);
 $MyData->setSerieDrawable("Total impressions",TRUE);
	$myPicture->drawLineChart(array("DisplayValues"=>TRUE,"PlotBorder"=>TRUE,"BorderSize"=>2,"Surrounding"=>-60,"BorderAlpha"=>80));
//draw legend for the line chart	
$myPicture->drawLegend(480,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_VERTICAL)); 

 
//get bar chart only for total impressions 
$MyData->setSerieDrawable("Taken impressions",FALSE);
$MyData->setSerieDrawable("Total impressions",TRUE);
	$myPicture->drawBarChart($settings);
 

$myPicture->drawText(250,30,"Criteo total and taken impressions",array("FontSize"=>15,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 
$myPicture->drawLegend(480,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_VERTICAL)); 
$myPicture->autoOutput("Ctot-imp.png"); 


?>
