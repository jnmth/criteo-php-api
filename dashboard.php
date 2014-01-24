<?php
echo '<center>
<img src="logo1.png" width="150">
<img src="criteo.png" width="150">
</center>
<br>';
?>


<html>
<head>
<style type="text/css">
p {
    clear: both;
    font: 400 12px/16px sans-serif;
    color: rgb(42,42,42);
    text-align: center;
    margin: 10px 0px;
}

h1 {
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-weight: 700;
    font-size: 36px;
    letter-spacing: -0.12em;
    text-align: center;
    color: rgb(51, 51, 51);
	}
	
a:link {
    margin: 0px 3px;
    color: inherit;
    text-decoration: none;
    border-bottom: 1px dotted rgb(51, 51, 51);
}
a:visited {
    margin: 0px 3px;
    color: inherit;
    text-decoration: none;
    border-bottom: 1px dotted rgb(51, 51, 51);
}
a:hover {
    margin: 0px 3px;
    color: inherit;
    text-decoration: none;
    border-bottom: 1px dotted rgb(51, 51, 51);
}
</style>
</head>
<body>

<h1>dashboard</h1>
<br>
<p>The data is collected via Criteo API for the last 7 days, excluding today.</p>
<p>In case you want to see the raw the dataset, please proceed <a href="table.php">HERE</a>.</p>
<p>At each view of the data set the script runs to collect fresh data. The script also runs automatically every day between 3 and 4 AM.</p>
<p></p><br><br><br>
<p>Links below the charts are heading to the original php file which always opens in a new tab and is responsive. </p>
<p></p>
<br><br><br>



<p>


	<img src="Cctr-cpm.php"><br>
<a  target="_blank" href="Cctr-cpm.php">Original file</a><br>
The pink level shows the average CTR for current week. <br>
The blue level indicates the average CPM of the week.<br>

<br><br><br>
	<img src="Crev-cpm.php"><br>
<a  target="_blank" href="Crev-cpm.php">Original file</a><br>
<br><br><br>
	<img src="Cimp.php"><br>
<a  target="_blank" href="Cimp.php">Original file</a><br>
<br><br><br>
	<img src="Ctot-imp.php"><br>
<a  target="_blank" href="Ctot-imp.php">Original file</a><br>

	
</p>

</body>
</html>
