<?php
 
require_once "pChart/class/pDraw.class.php";
require_once "pChart/class/pImage.class.php";
require_once "pChart/class/pData.class.php";
//dim
	$place = array();
	//met
	$day = array();
	//values
	
	$rev = array();
	$cpm = array();


$csv = 'test.csv';
$file_handle = fopen("test.csv", "r");

	
# get dates
while (!feof($file_handle) ) {
       
		$line_of_text = fgetcsv($file_handle, 1024, ";");
array_push($day, $line_of_text[4]);

           		/*array_push($place, $line_of_text[3]);
           			array_push($perc, $line_of_text[7]);
				array_push($rev, $line_of_text[10]);
				array_push($cpm, $line_of_text[10]);*/
    
			}




fclose($file_handle);
$day_out = array_slice($day, 1, 7); 
//slice array - first placement, 7 days >> CHART DATA for 1st placement only tho
/*$rev_out = array_slice($rev, 1, 8); 
$cpm_out = array_slice($cpm, 1, 8); */


// ---------------------get data for each day------------------------//

 // hledej prvni datum
 // -7
	$file_handle = fopen("test.csv", "r");
	$rev_7 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_7, $line_of_text[10]); #a k nemu prvni rev
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_7, $line_of_text[10]);
			}
			
		}
	#print_r($rev_7);		
	fclose($file_handle);
	
	// -6
	$file_handle = fopen("test.csv", "r");
	$rev_6 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_6, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_6, $line_of_text[10]);
			}
			
		}
	#print_r($rev_6);		
	fclose($file_handle);
	
	// -5
	$file_handle = fopen("test.csv", "r");
	$rev_5 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_5, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_5, $line_of_text[10]);
			}
			
		}
	#print_r($rev_5);		
	fclose($file_handle);
	// -4
	$file_handle = fopen("test.csv", "r");
	$rev_4 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_4, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_4, $line_of_text[10]);
			}
			
		}
	#print_r($rev_4);		
	fclose($file_handle);
	// -3
	$file_handle = fopen("test.csv", "r");
	$rev_3 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_3, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_3, $line_of_text[10]);
			}
			
		}
	#print_r($rev_3);		
	fclose($file_handle);
	// -2
	$file_handle = fopen("test.csv", "r");
	$rev_2 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_2, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_2, $line_of_text[10]);
			}
			
		}
	#print_r($rev_2);		
	fclose($file_handle);
	// -1
	$file_handle = fopen("test.csv", "r");
	$rev_1 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($rev_1, $line_of_text[10]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($rev_1, $line_of_text[10]);
			}
			
		}
	#print_r($rev_1);		
	fclose($file_handle);
	#echo "---------------------------";
	//tady ale potrebuju prumery
		function average($arr)
			{   if (!is_array($arr)) return false;
		return array_sum($arr)/count($arr);
		}

	$rev1s = array_sum($rev_1);
	$rev2s = array_sum($rev_2);
	$rev3s = array_sum($rev_3);
	$rev4s = array_sum($rev_4);
	$rev5s = array_sum($rev_5);
	$rev6s = array_sum($rev_6);
	$rev7s = array_sum($rev_7);
	
	
	$revta = array(
	$rev1s,
	$rev2s,
	$rev3s,
	$rev4s,
	$rev5s,
	$rev6s,
	$rev7s,
	);
	$revt = average($revta);
	#echo "------------revta---------------";
	#print_r($revta);
	#echo "--------------konec-------------";
	#echo $revt;
	
	
	
	//zaokrouhlovani
	
$i=0;
while(!empty($revta[$i])) {
	$revtar[$i] = round($revta[$i], 2);
	++$i;
}

// ---------------------get data for each day   SECOND RND ------------------------//

 // hledej prvni datum
 // -7
	$file_handle = fopen("test.csv", "r");
	$cpm_7 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_7, $line_of_text[9]); #a k nemu prvni cpm
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_7, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_7);		
	fclose($file_handle);
	
	// -6
	$file_handle = fopen("test.csv", "r");
	$cpm_6 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_6, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_6, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_6);		
	fclose($file_handle);
	
	// -5
	$file_handle = fopen("test.csv", "r");
	$cpm_5 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_5, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_5, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_5);		
	fclose($file_handle);
	// -4
	$file_handle = fopen("test.csv", "r");
	$cpm_4 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_4, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_4, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_4);		
	fclose($file_handle);
	// -3
	$file_handle = fopen("test.csv", "r");
	$cpm_3 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_3, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_3, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_3);		
	fclose($file_handle);
	// -2
	$file_handle = fopen("test.csv", "r");
	$cpm_2 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_2, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_2, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_2);		
	fclose($file_handle);
	// -1
	$file_handle = fopen("test.csv", "r");
	$cpm_1 = array();
		$line_of_text = fgetcsv($file_handle, 1024, ";"); #header
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$line_of_text = fgetcsv($file_handle, 1024, ";");
		$init = $line_of_text[4]; #prvni datum
		array_push($cpm_1, $line_of_text[9]); #a k nemu prvni impr
		#echo $init;
		while (!feof($file_handle) ) {
       	$line_of_text = fgetcsv($file_handle, 1024, ";");
			if ($line_of_text[4] == $init) {
				array_push($cpm_1, $line_of_text[9]);
			}
			
		}
	#print_r($cpm_1);		
	fclose($file_handle);
	#echo "---------------------------";
	

	$cpm1s = average($cpm_1);
	$cpm2s = average($cpm_2);
	$cpm3s = average($cpm_3);
	$cpm4s = average($cpm_4);
	$cpm5s = average($cpm_5);
	$cpm6s = average($cpm_6);
	$cpm7s = average($cpm_7);
	
	
	$cpmta = array(
	$cpm1s,
	$cpm2s,
	$cpm3s,
	$cpm4s,
	$cpm5s,
	$cpm6s,
	$cpm7s,
	);
	$cpmt = average($cpmta);
	#echo "------------cpmta---------------";
	#print_r($cpmta);
	#echo "--------------konec-------------";
	#echo $cpmt;
	
	

	//zaokrouhlovani
	
$i=0;
while(!empty($cpmta[$i])) {
	$cpmtar[$i] = round($cpmta[$i], 2);
	++$i;
}

//-------------------------------------------------------------------//
//now build the fucking chart
//-------------------------------------------------------------------//



 $MyData = new pData();   
 $MyData->loadPalette("pChart/palettes/shade.color",TRUE); 
 $MyData->addPoints($revtar,"Revenue in EUR"); 
 $MyData->addPoints($cpmtar,"CPM in EUR"); 
 $MyData->setAxisName(0,"EUR"); 
 $MyData->addPoints($day_out,"Day"); 
 $MyData->setSerieDescription("Day","Day"); 
 $MyData->setAbscissa("Day"); 
 $myPicture = new pImage(700,430,$MyData); 
 $myPicture->setFontProperties(array("FontName"=>"pChart/fonts/calibri.ttf","FontSize"=>7)); 
 $myPicture->setGraphArea(50,30,700,400); 
   $myPicture->drawScale(array("CycleBackground"=>TRUE,"DrawSubTicks"=>FALSE,"GridR"=>0,"GridG"=>0,"GridB"=>0,"GridAlpha"=>10)); 
 $myPicture->drawText(250,30,$place[1],array("FontSize"=>15,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 
 $settings = array("Floating0Serie"=>"Floating0","Draw0Line"=>TRUE,"Gradient"=>TRUE,"DisplayPos"=>LABEL_POS_INSIDE,"DisplayValues"=>TRUE,"DisplayR"=>177,"DisplayG"=>50,"DisplayB"=>0,"DisplayShadow"=>TRUE,"Surrounding"=>10); 
  $myPicture->drawBarChart($settings); 
  $myPicture->drawText(250,30,"Criteo daily revenue and eCPM",array("FontSize"=>15,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 
 $myPicture->drawLegend(580,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_VERTICAL)); 
 $myPicture->autoOutput("Crev-cpm.png"); 




?>
