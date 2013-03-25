<?php
//session_start();
$file="result.xml";
$result= new SimpleXMLElement($file, null, true);
?>
<html>
<head>
<style>
table {
	border-collapse:collapse;
	opacity: 0.8;
	
}
table, th, td
{
border: 5px solid black;
text-align:center;
margin: 0 auto;

}
td , th{
	
	padding:15px;
	width: 80px;
}
th {
	color: red;
}
</style>
<link rel="stylesheet" href="css/global.css"> 
</head>
<body>
	<div id="container">  
	<table border="1">
	<tr>
	<th>Roll No</th>
	<th>Score</th>
	<th>Rank</th>
	</tr>
	
	<?php $userarray=array(); $scorearray=array(); 
	for($i=0; $i<$result->count; $i++) {
		$userarray[]=$result->username[$i];
		$scorearray[]=$result->score[$i];
	}
		arsort($scorearray, SORT_NUMERIC);	
		for($i=0; $i<$result->count; $i++) { ?>
	<tr> 
	<td><?php echo $userarray[key($scorearray)];?></td>
	<td><?php echo $scorearray[key($scorearray)];?></td>
	<td><?php echo $i+1; ?></td>
	</tr>
	<?php next($scorearray);} ?>
	</tr>
	</table>
	</div>
</body>
</html>