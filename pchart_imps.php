<?php

require_once "pChart/class/pDraw.class.php";
require_once "pChart/class/pImage.class.php";
require_once "pChart/class/pData.class.php";
//dim
	$place = array();
	//met
	$day = array();
	//values
	$perc = array();
	$ctr = array();
	$cpm = array();
	$imp=array();

$csv = 'test.csv';
$file_handle = fopen("test.csv", "r");

	

while (!feof($file_handle) ) {
       
		$line_of_text = fgetcsv($file_handle, 1024, ";");

           		array_push($place, $line_of_text[3]);
           		array_push($day, $line_of_text[4]);
           		array_push($perc, $line_of_text[7]);
				array_push($ctr, $line_of_text[8]);
				array_push($cpm, $line_of_text[9]);
    
			}




fclose($file_handle);

//slice array - first placement, 7 days >> CHART DATA for 1st placement only tho
$ctr_out = array_slice($ctr, 1, 8); 
$cpm_out = array_slice($cpm, 1, 8); 
$day_out = array_slice($day, 1, 7); 

$i=0;
$cpm_out_r = array();
while(!empty($cpm_out[$i])) {
	$cpm_out_r[$i] = round($cpm_out[$i], 2);
	++$i;
}

 // hledej prvni datum
 // -7
	$file_handle = fopen("test.csv", "r");
	$imp_7 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($imp_7, $line_of_text[6]); #a k nemu prvni impr
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
	function average($arr)
		{
		if (!is_array($arr)) return false;

		return array_sum($arr)/count($arr);
		}
	$impt1 = average($impta);
	$imptr = round($impt1, 2);
	$impt = array ($imptr,$imptr,$imptr,$imptr,$imptr,$imptr,$imptr,);
	
	#echo "------------impta---------------";
	#print_r($impta);
	#echo "--------------konec-------------";
	#echo $impt;
	
//-------------------------------------	
	//now build the fucking chart
	// chart with average value line
//-------------------------------------
	

 $MyData = new pData();   
 $MyData->loadPalette("pChart/palettes/navy.color",TRUE); 
 $MyData->addPoints($impta,"Total taken impressions"); 
 $MyData->addPoints($impt,"Average for the week"); 
 $MyData->setAxisName(0,"Impressions"); 
 $MyData->addPoints($day_out,"Day"); 
 $MyData->setSerieDescription("Day","Day"); 
 $MyData->setAbscissa("Day"); 
$MyData->setSerieWeight("Total taken impressions",3);
$MyData->setSerieWeight("Average for the week",2);

 /* Create the floating 0 data serie */ 
 $MyData->addPoints(array(60,80,20,40,0,50,90,30,100),"Floating 0"); 
 $MyData->setSerieDrawable("Floating 0",FALSE); 

 
 $myPicture = new pImage(700,430,$MyData); 
 $myPicture->setFontProperties(array("FontName"=>"pChart/fonts/calibri.ttf","FontSize"=>8)); 

 /* Draw the scale  */ 
 $myPicture->setGraphArea(50,30,700,400); 

 
 $myPicture->drawScale(array

("CycleBackground"=>TRUE,"DrawSubTicks"=>FALSE,"GridR"=>0,"GridG"=>0,"GridB"=>0,"GridAlpha"=>10)); 
 
$myPicture->drawText(250,30,"Criteo total taken impressions last 7 days",array("FontSize"=>15,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 


 /* Draw the chart */ 
 $settings = array("Floating0Serie"=>"Floating0","Draw0Line"=>TRUE,"Gradient"=>TRUE,"DisplayPos"=>LABEL_POS_INSIDE,"DisplayValues"=>TRUE,"DisplayR"=>0,"DisplayG"=>0,"DisplayB"=>0,"DisplayShadow"=>TRUE,"Surrounding"=>10); 
 //$myPicture->drawBarChart($settings); 
 $MyData->setSerieDrawable("Total taken impressions",TRUE);
 $MyData->setSerieDrawable("Average for the week",FALSE);
 $myPicture->drawLineChart(array("DisplayValues"=>TRUE,"DisplayColor"=>DISPLAY_MANUAL,"DisplayR"=>153,"DisplayG"=>12,"DisplayB"=>65,"DisplayShadow"=>TRUE,"Surrounding"=>10));
 $myPicture->drawLegend(480,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_VERTICAL)); 

 
 $MyData->setSerieDrawable("Total taken impressions",FALSE);
 $MyData->setSerieDrawable("Average for the week",TRUE);
 $myPicture->drawLineChart(array("DisplayValues"=>FALSE));

 /* Write the chart legend */ 
 $myPicture->drawLegend(480,22,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_VERTICAL)); 

 $myPicture->autoOutput("Cimp.png"); 



	
?>
