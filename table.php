<?php


//http://cpm.criteo.com/support/?action=artikel&cat=17&id=16&artlang=en


//----------------------------- get dates --------------------------------//

	/*
	other ways for $startDate?
	$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
	$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
	$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
	*/
    


//Create url for last 7 days
  $startDate = date('Y-m-d', strtotime('-7 days'));
  $endDate = date('Y-m-d', strtotime('-1 days')); ##excluding today


//----------------------------- get fresh data--------------------------------//

 $url = "https://publishers.criteo.com/statsexport.aspx?apitoken=XXXXXXXXXXXXXXXXXXXXXXXX&begindate="
        .$startDate
        ."&enddate="
        .$endDate;
        
$csv = 'dataset.csv';
$current = file_get_contents($url);
file_put_contents($csv, $current);


//----------------------------- build table----------------------------------//

//-----------HTML
echo '

  <font face="helvetica" align="center">

  <table style="font-size: 8px" align="center" cellpadding=0 bgcolor="#f4f4f4">
  ';
//-----------HTML


    $file_handle = fopen("dataset.csv", "r");


//get all lines with ; as delimiter

while (!feof($file_handle) ) {
        echo '<tr>';
	    	$line_of_text = fgetcsv($file_handle, 1024, ";");

// get each csv cell in the current line

			   $i = 0;
				      while (!empty($line_of_text[$i])) {
				      echo '<td align="center">'.$line_of_text[$i].'</td>';
				++$i;
		    	}
	      echo '</tr>';

    }

//-----------HTML

echo '
</table></font>';


//-----------HTML


    fclose($file_handle);

//-----------------logger---------------//

  $timestamp = date('Y-m-d  H:i:s');
//ten cells in each row
  $random = rand(1,10); 
//open file again so it reads the lines from the start
  $file_handle = fopen("test.csv", "r");
  $line_of_text = fgetcsv($file_handle, 1024, ";");
  file_put_contents('logger', 
    "Hi there this is logger checking upon cron jobs at my crappy hosting. -- Timestamp: "
    .$timestamp
    ." -- Random chunk of data file, 1st line: "
    .$line_of_text[$random]);

  fclose($file_handle);

?>
