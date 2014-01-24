<?php



$j=array();



$j['http::/translatorlady.com/skript1'] = '* * * * *'; //spusti skirpt kazdou minutu kazde hodiny kazdeho dne kazdeho mesice

$j['http::/translatorlady.com/skript2'] = '*/5 * * * *'; //kazdych 5 minut

$j['http::/translatorlady.com/skript3'] = '0 * * * *'; //spusti skirpt vzdy v celou, tj. ve 10:00, v 11:00, ve 12:00, ve 13:00 atd. kazdy den

$j['http::/translatorlady.com/skript4'] = '15 * * * *'; //spusti skript vzdy v celou hodinu a patnact minut, takze v 8:15, v 9:15, v 10;15 atd.

$j['http::/translatorlady.com/skript5'] = '* 6 * * *'; //kazdy den pouze mezi sestou a sedmou hodinnou rani bude spoustet skript kazdou minutu, tzn. celkem 60x kazdy den,

$j['http::/translatorlady.com/skript6'] = '* * 1 * *'; //vzdy prvniho v mesici bude spoustet skript kazdou minutu po cely den

$j['http::/translatorlady.com/skript7'] = '* 6 1 * *'; //vzdy prvniho v mesici bude spoustet skript od sesti do sedmi rano

$j['http::/translatorlady.com/skript8'] = '0 6 1 * *'; //vzdy prvniho v mesici v 6:00 spusti skript

$j['http::/translatorlady.com/skript9'] = '0 6 1 08 *'; //spusti jednou kazdy rok prvniho srpna presne v 6:00




foreach($j as $job=>$cron){
  $time=time();
  if(is_time_cron($time,$cron)) exec('curl -k '.$job.' > /dev/null 2>&1');
    //curl ceka nez dojede jeden $job, pak spousti druhy teprve

  //if(is_time_cron($time,$cron)) exec('nohup curl -k '.$job.' > /dev/null &');
    //pusti na pozadi, takze to dojede hned z pohledu skriptu
}

function is_time_cron($time , $cron) 
{
    $cron_parts = explode(' ' , $cron);
    if(count($cron_parts) != 5)
    {
    	return false;
    }
    
    list($min , $hour , $day , $mon , $week) = explode(' ' , $cron);
    
    $to_check = array('min' => 'i' , 'hour' => 'G' , 'day' => 'j' , 'mon' => 'n' , 'week' => 'w');
    
    $ranges = array(
    	'min' => '0-59' ,
    	'hour' => '0-23' ,
    	'day' => '1-31' ,
    	'mon' => '1-12' ,
    	'week' => '0-6' ,
    );
    
    foreach($to_check as $part => $c)
    {
    	$val = $$part;
    	$values = array();
    	
    	/*
    		For patters like 0-23/2
    	*/
    	if(strpos($val , '/') !== false)
    	{
    		//Get the range and step
    		list($range , $steps) = explode('/' , $val);
    		
    		//Now get the start and stop
    		if($range == '*')
    		{
    			$range = $ranges[$part];
    		}
    		list($start , $stop) = explode('-' , $range);
    			
			for($i = $start ; $i <= $stop ; $i = $i + $steps)
			{
				$values[] = $i;
			}
    	}
    	/*
    		For patters like :
    		2
    		2,5,8
    		2-23
    	*/
    	else
    	{
    		$k = explode(',' , $val);
    		
    		foreach($k as $v)
    		{
    			if(strpos($v , '-') !== false)
    			{
    				list($start , $stop) = explode('-' , $v);
    			
					for($i = $start ; $i <= $stop ; $i++)
					{
						$values[] = $i;
					}
    			}
    			else
    			{
    				$values[] = $v;
    			}
    		}
    	}
      
      echo date($c , $time).'<br>';
      echo $val.'<br>';
      foreach($values as $v) echo $v.';';
    	
    	if ( !in_array( date($c , $time) , $values ) and (strval($val) != '*') ) 
		{
			return false;
		}
    }
    
    return true;
}

//var_dump(time() , '0 5 * * *');  //true or false

?>
