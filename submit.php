<?php
		session_start();
$file="data.xml";
$test= new SimpleXMLElement($file, null, true);
$score=0; $r=0; $w=0; $u=0;
if(!isset($_POST['q'.$_POST["question1"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q'.$_POST["question1"]]==$test->easy->question[intval($_POST["question1"])]->key[0] ) 
	{ $score=$score+3; $r++; }

else 
	{ $score=$score-1; $w++; }
	
if(!isset($_POST['q'.$_POST["question2"]])) 
	{ $score=$score+0; $u++; }
else if($_POST['q'.$_POST['question2']]==$test->easy->question[intval($_POST['question2'])]->key[0])
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }
		
if(!isset($_POST['q'.$_POST["question3"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q'.$_POST['question3']]==$test->easy->question[intval($_POST['question3'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }
if(!isset($_POST['q'.$_POST["question4"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q'.$_POST['question4']]==$test->easy->question[intval($_POST['question4'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }
if(!isset($_POST['q'.$_POST["question5"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q'.$_POST['question5']]==$test->easy->question[intval($_POST['question5'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q1'.$_POST["question6"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q1'.$_POST['question6']]==$test->medium->question[intval($_POST['question6'])]->key[0] ) 
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q1'.$_POST["question7"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q1'.$_POST['question7']]==$test->medium->question[intval($_POST['question7'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q1'.$_POST["question8"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q1'.$_POST['question8']]==$test->medium->question[intval($_POST['question8'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q1'.$_POST["question9"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q1'.$_POST['question9']]==$test->medium->question[intval($_POST['question9'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q1'.$_POST["question10"]])) {
	{ $score=$score+0; $u++; }
}	
else if($_POST['q1'.$_POST['question10']]==$test->medium->question[intval($_POST['question10'])]->key[0]) 
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q2'.$_POST["question11"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q2'.$_POST['question11']]==$test->tough->question[intval($_POST['question11'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q2'.$_POST["question12"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q2'.$_POST['question12']]==$test->tough->question[intval($_POST['question12'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q2'.$_POST["question13"]])) {
	{ $score=$score+0; $u++; }
}	
else if($_POST['q2'.$_POST['question13']]==$test->tough->question[intval($_POST['question13'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }

if(!isset($_POST['q2'.$_POST["question14"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q2'.$_POST['question14']]==$test->tough->question[intval($_POST['question14'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }
if(!isset($_POST['q2'.$_POST["question15"]])) {
	{ $score=$score+0; $u++; }
}
else if($_POST['q2'.$_POST['question15']]==$test->tough->question[intval($_POST['question15'])]->key[0] )
	{ $score=$score+3; $r++; }
else
	{ $score=$score-1; $w++; }
		
		$file="result.xml";
		$result= new SimpleXMLElement($file, null, true);
			$result->addChild('username', (string)$_SESSION["username"]);
	$result->addChild('score', $score);
	$result->count= $result->count + 1;
	file_put_contents($file, $result->asXML());
session_destroy();
?>

<html>
<head>
<link rel="stylesheet" href="css/global.css"> 
<style>
#score {
	margin-left: 125px;
}
#num {
	color: red;

}
#stats {
	padding-top: 100px;
}
a:link,a:visited {
	color:black;
	text-decoration:none;
}

a:hover,a:active {
	color:black;
	text-decoration:underline;
}
a, p {
	text-align: center;
}
</style>
<script>

</script>

</head>
<body>
	<div id="container">  
	<div id="stats"><center>
	<p><h1>Your final score is: <span id="num"><?php echo  $score; ?></h1></span></p>
	<br />No. of correct answers: <span id="num"><?php echo  $r; ?></span>
	<br />No. of wrong answers: <span id="num"><?php echo  $w; ?></span>
	<br />No. of unattempted questions: <span id="num"><?php echo  $u; ?></span>
	</div>	
		<img src="img/example-frame.png" width="839" height="41" id="frame"> 
		</div>

		