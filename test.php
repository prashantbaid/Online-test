<?php
session_start();
if(!isset($_SESSION["authenticated"])) {
	header("Location: index.php");
	exit;
}

?>
<html>
<head>
<script src="jquery.js"></script>
								 <?php
            $input = array();
            for($i=0; $i<15; $i++)
            $input[]=$i;
            shuffle($input);

            $file="data.xml";
            $test= new SimpleXMLElement($file, null, true); ?>
             <?php      
            ?> 
	<meta charset="utf-8">
	
	<title>Online Test</title>
	
	<link rel="stylesheet" href="css/global.css"> 

	<style>
	#ques {
		padding-top: 25px;
		padding-bottom: 25px;
	}
	#form {
		margin: 0 auto;
	}
	#info {
		z-index: 100;
	}


	#submit_but {
		width: auto;
	padding: 9px 15px;
	background: #356AA8;
	border: 0;
	font-size: 14px;
	color: #FFFFFF;
	border-radius: 4px;
	margin-bottom: 10px;

}
 #q2, #q3, #q4, #q5, #q6, #q7, #q8, #q9, #q10, #q11, #q12, #q13, #q14, #q15 {
	display: none;
}
#navd1, #navd2, #navd3, #navd4, #navd5, #navd6, #navd7, #navd8, #navd9, #navd10, #navd11, #navd12, #navd13, #navd14, #navd15 {
	background-color: red;
	border-radius: 4px;
	opacity: 0.7;
	padding: 2px 2px 2px 2px;
	font-size: 12px;
}
#nav {
	padding-top: 40px;
}
#timer {
	margin: 0 auto;
	text-align: center;
}
#ecolor {
	color: green;
}
#mcolor {
	color: blue;
}
#tcolor {
	color: red;
}
#timer {
	font-size: 15px;
}
	</style>
	<script>
		function hideall() {
			$('#q1').hide();
			$('#q2').hide();
			$('#q3').hide();
			$('#q4').hide();
			$('#q5').hide();
			$('#q6').hide();
			$('#q7').hide();
			$('#q8').hide();
			$('#q9').hide();
			$('#q10').hide();
			$('#q11').hide();
			$('#q12').hide();
			$('#q13').hide();
			$('#q14').hide();
			$('#q15').hide();
		}
		function toggle1() {
			hideall();
			$('#q1').show();
		$("input[id=radio1]:radio").click(function(){ 
					$('#navd1').css("background-color", "green");});

	    }
	function toggle2() {
			hideall();
			$('#q2').show();
					$("input[id=radio2]:radio").click(function(){ 
				$('#navd2').css("background-color", "green"); });
	    }
	function toggle3() {
			hideall();
			$('#q3').show();
					$("input[id=radio3]:radio").click(function(){ 
				$('#navd3').css("background-color", "green"); });
	}
		function toggle4() {
			hideall();
			$('#q4').show();
					$("input[id=radio4]:radio").click(function(){ 
				$('#navd4').css("background-color", "green"); });
	}
		function toggle5() {
			hideall();
			$('#q5').show();
					$("input[id=radio5]:radio").click(function(){ 
				$('#navd5').css("background-color", "green"); });
	}
		function toggle6() {
			hideall();
			$('#q6').show();
					$("input[id=radio6]:radio").click(function(){ 
				$('#navd6').css("background-color", "green"); });
	}
		function toggle7() {
			hideall();
			$('#q7').show();
					$("input[id=radio7]:radio").click(function(){ 
				$('#navd7').css("background-color", "green"); });
	}
		function toggle8() {
			hideall();
			$('#q8').show();
					$("input[id=radio8]:radio").click(function(){ 
				$('#navd8').css("background-color", "green"); });
	}
		function toggle9() {
			hideall();
			$('#q9').show();
					$("input[id=radio9]:radio").click(function(){ 
				$('#navd9').css("background-color", "green"); });
	}
		function toggle10() {
			hideall();
			$('#q10').show();
					$("input[id=radio10]:radio").click(function(){ 
				$('#navd10').css("background-color", "green"); });
	}
		function toggle11() {
			hideall();
			$('#q11').show();
					$("input[id=radio11]:radio").click(function(){ 
				$('#navd11').css("background-color", "green"); });
	}
		function toggle12() {
			hideall();
			$('#q12').show();
					$("input[id=radio12]:radio").click(function(){ 
				$('#navd12').css("background-color", "green"); });
	}
		function toggle13() {
			hideall();
			$('#q13').show();
					$("input[id=radio13]:radio").click(function(){ 
				$('#navd13').css("background-color", "green"); });
	}
		function toggle14() {
			hideall();
			$('#q14').show();
					$("input[id=radio14]:radio").click(function(){ 
				$('#navd14').css("background-color", "green"); });
	}
		function toggle15() {
			hideall();
			$('#q15').show();
					$("input[id=radio15]:radio").click(function(){ 
				$('#navd15').css("background-color", "green"); });
	}


	var Timer;
var TotalSeconds;
var i=1;

function CreateTimer(TimerID, Time) {
    Timer = document.getElementById(TimerID);
    TotalSeconds = Time;
    
    UpdateTimer()
    window.setTimeout("Tick()", 1000);
}

function Tick() {
	if (TotalSeconds == 30) {
		
        alert("Just 30 seconds left. Hurry Up!");
    }
    
    if (TotalSeconds == 1) {
    formsubmit();
    }
    TotalSeconds -= 1;
    UpdateTimer()
    window.setTimeout("Tick()", 1000);
}

function UpdateTimer() {
    Timer.innerHTML = TotalSeconds+" seconds left."; }

    function countdown () {
    	CreateTimer("timer", 120);
    	
    	toggle1();
    }
function formsubmit () {
	document.onlinetest.submit();
}
	</script>
</head>
<body onload="countdown();">

<div id="timer"></div>
<script type="text/javascript"></script>
	<div id="container"> 

<form action="submit.php" method="post" id="form" name="onlinetest">

				

					
				<div id="q1">
				 <p id="ques">Q1. <?php echo $test->easy->question[$input[0]]->ques?> </p>
				 <input type="hidden" name="question1" value="<?php echo $input[0]?>">
                 <p id="option"><input type="radio" name="q<?php echo $input[0]?>" value="0" id="radio1"/><?php echo $test->easy->question[$input[0]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[0]?>" value="1" id="radio1"/><?php echo $test->easy->question[$input[0]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[0]?>" value="2" id="radio1"/><?php echo $test->easy->question[$input[0]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[0]?>" value="3" id="radio1"/><?php echo $test->easy->question[$input[0]]->option[3]; ?></p>
                 <p id="info">Type: <span id="ecolor">Easy</span></p>
                 </div>
                 <div id="q2">
				 <p id="ques">Q2. <?php echo $test->easy->question[$input[1]]->ques?> </p>
				 <input type="hidden" name="question2" value="<?php echo $input[1]?>">
                 <p id="option"><input type="radio" name="q<?php echo $input[1]?>" value="0" id="radio2" /><?php echo $test->easy->question[$input[1]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[1]?>" value="1" id="radio2" /><?php echo $test->easy->question[$input[1]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[1]?>" value="2" id="radio2" /><?php echo $test->easy->question[$input[1]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[1]?>" value="3" id="radio2" /><?php echo $test->easy->question[$input[1]]->option[3]; ?></p>
                 <p id="info">Type: <span id="ecolor">Easy</span></p>
                 </div>
                 <div id="q3">

				 <p id="ques">Q3. <?php echo $test->easy->question[$input[2]]->ques?> </p>
				 <input type="hidden" name="question3" value="<?php echo $input[2]?>">
                 <p id="option"><input type="radio" name="q<?php echo $input[2]?>" value="0" id="radio3" /><?php echo $test->easy->question[$input[2]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[2]?>" value="1" id="radio3" /><?php echo $test->easy->question[$input[2]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[2]?>" value="2" id="radio3" /><?php echo $test->easy->question[$input[2]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[2]?>" value="3" id="radio3" /><?php echo $test->easy->question[$input[2]]->option[3]; ?></p>
                 <p id="info">Type: <span id="ecolor">Easy</span></p>
				</div>
                 <div id="q4">
				 <p id="ques">Q4. <?php echo $test->easy->question[$input[3]]->ques?> </p>
				 <input type="hidden" name="question4" value="<?php echo $input[3]?>">
                 <p id="option"><input type="radio" name="q<?php echo $input[3]?>" value="0" id="radio4" /><?php echo $test->easy->question[$input[3]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[3]?>" value="1" id="radio4" /><?php echo $test->easy->question[$input[3]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[3]?>" value="2" id="radio4" /><?php echo $test->easy->question[$input[3]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[3]?>" value="3" id="radio4" /><?php echo $test->easy->question[$input[3]]->option[3]; ?></p>
                 <p id="info">Type: <span id="ecolor">Easy</span></p>
				</div>
                 <div id="q5">
				 <p id="ques">Q5. <?php echo $test->easy->question[$input[4]]->ques?> </p>
				 <input type="hidden" name="question5" value="<?php echo $input[4]?>">
                 <p id="option"><input type="radio" name="q<?php echo $input[4]?>" value="0" id="radio5" /><?php echo $test->easy->question[$input[4]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[4]?>" value="1" id="radio5" /><?php echo $test->easy->question[$input[4]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[4]?>" value="2" id="radio5" /><?php echo $test->easy->question[$input[4]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q<?php echo $input[4]?>" value="3" id="radio5" /><?php echo $test->easy->question[$input[4]]->option[3]; ?></p>
                 <p id="info">Type: <span id="ecolor">Easy</span></p>
				</div>
                 <div id="q6">
                 <p id="ques">Q6. <?php echo $test->medium->question[$input[0]]->ques?> </p>
                 <input type="hidden" name="question6" value="<?php echo $input[0]?>">
                 <p id="option"><input type="radio" name="q1<?php echo $input[0]?>" value="0" id="radio6" /><?php echo $test->medium->question[$input[0]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[0]?>" value="1" id="radio6" /><?php echo $test->medium->question[$input[0]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[0]?>" value="2" id="radio6" /><?php echo $test->medium->question[$input[0]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[0]?>" value="3" id="radio6" /><?php echo $test->medium->question[$input[0]]->option[3]; ?></p>
                 <p id="info">Type: <span id="mcolor">Medium</span></p>
                 				</div>
                 <div id="q7">
                                  <p id="ques">Q7. <?php echo $test->medium->question[$input[1]]->ques?> </p>
                                  <input type="hidden" name="question7" value="<?php echo $input[0]?>">
                 <p id="option"><input type="radio" name="q1<?php echo $input[1]?>" value="0" id="radio7" /><?php echo $test->medium->question[$input[1]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[1]?>" value="1" id="radio7" /><?php echo $test->medium->question[$input[1]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[1]?>" value="2" id="radio7" /><?php echo $test->medium->question[$input[1]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[1]?>" value="3" id="radio7" /><?php echo $test->medium->question[$input[1]]->option[3]; ?></p>
                 <p id="info">Type: <span id="mcolor">Medium</span></p>
                 				</div>
                 <div id="q8">
                                  <p id="ques">Q8. <?php echo $test->medium->question[$input[2]]->ques?> </p>
                                  <input type="hidden" name="question8" value="<?php echo $input[2]?>">
                 <p id="option"><input type="radio" name="q1<?php echo $input[2]?>" value="0" id="radio8" /><?php echo $test->medium->question[$input[2]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[2]?>" value="1" id="radio8" /><?php echo $test->medium->question[$input[2]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[2]?>" value="2" id="radio8" /><?php echo $test->medium->question[$input[2]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[2]?>" value="3" id="radio8" /><?php echo $test->medium->question[$input[2]]->option[3]; ?></p>
                 <p id="info">Type: <span id="mcolor">Medium</span></p>
                 				</div>
                 <div id="q9">                 <p id="ques">Q9. <?php echo $test->medium->question[$input[3]]->ques?> </p>
                 <input type="hidden" name="question9" value="<?php echo $input[3]?>">
                 <p id="option"><input type="radio" name="q1<?php echo $input[3]?>" value="0" id="radio9" /><?php echo $test->medium->question[$input[3]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[3]?>" value="1" id="radio9" /><?php echo $test->medium->question[$input[3]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[3]?>" value="2" id="radio9" /><?php echo $test->medium->question[$input[3]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[3]?>" value="3" id="radio9" /><?php echo $test->medium->question[$input[3]]->option[3]; ?></p>
                 <p id="info">Type: <span id="mcolor">Medium</span></p>
                             				</div>
                 <div id="q10">     <p id="ques">Q10. <?php echo $test->medium->question[$input[4]]->ques?> </p>
                 <input type="hidden" name="question10" value="<?php echo $input[4]?>">
                 <p id="option"><input type="radio" name="q1<?php echo $input[4]?>" value="0" id="radio10" /><?php echo $test->medium->question[$input[4]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[4]?>" value="1" id="radio10" /><?php echo $test->medium->question[$input[4]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[4]?>" value="2" id="radio10" /><?php echo $test->medium->question[$input[4]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q1<?php echo $input[4]?>" value="3" id="radio10" /><?php echo $test->medium->question[$input[4]]->option[3]; ?></p>
                 <p id="info">Type: <span id="mcolor">Medium</span></p>
             				</div>
                 <div id="q11">
                 <p id="ques">Q11. <?php echo $test->tough->question[$input[0]]->ques?> </p>
                 <input type="hidden" name="question11" value="<?php echo $input[0]?>">
                 <p id="option"><input type="radio" name="q2<?php echo $input[0]?>" value="0" id="radio11" /><?php echo $test->tough->question[$input[0]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[0]?>" value="1" id="radio11" /><?php echo $test->tough->question[$input[0]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[0]?>" value="2" id="radio11" /><?php echo $test->tough->question[$input[0]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[0]?>" value="3" id="radio11" /><?php echo $test->tough->question[$input[0]]->option[3]; ?></p>
				<p id="info">Type: <span id="tcolor">Tough</span></p>
				             				</div>
                 <div id="q12">    <p id="ques">Q12. <?php echo $test->tough->question[$input[1]]->ques?> </p>
                 <input type="hidden" name="question12" value="<?php echo $input[1]?>">
                 <p id="option"><input type="radio" name="q2<?php echo $input[1]?>" value="0" id="radio12" /><?php echo $test->tough->question[$input[1]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[1]?>" value="1" id="radio12" /><?php echo $test->tough->question[$input[1]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[1]?>" value="2" id="radio12" /><?php echo $test->tough->question[$input[1]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[1]?>" value="3" id="radio12" /><?php echo $test->tough->question[$input[1]]->option[3]; ?></p>
				<p id="info">Type: <span id="tcolor">Tough</span></p>
				             				</div>
                 <div id="q13">    <p id="ques">Q13. <?php echo $test->tough->question[$input[2]]->ques?> </p>
                 <input type="hidden" name="question13" value="<?php echo $input[2]?>">
                 <p id="option"><input type="radio" name="q2<?php echo $input[2]?>" value="0" id="radio13" /><?php echo $test->tough->question[$input[2]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[2]?>" value="1" id="radio13" /><?php echo $test->tough->question[$input[2]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[2]?>" value="2" id="radio13" /><?php echo $test->tough->question[$input[2]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[2]?>" value="3" id="radio13" /><?php echo $test->tough->question[$input[2]]->option[3]; ?></p>
				<p id="info">Type: <span id="tcolor">Tough</span></p>
				             				</div>
                 <div id="q14">    <p id="ques">Q14. <?php echo $test->tough->question[$input[3]]->ques?> </p>
                 <input type="hidden" name="question14" value="<?php echo $input[3]?>">
                 <p id="option"><input type="radio" name="q2<?php echo $input[3]?>" value="0" id="radio14" /><?php echo $test->tough->question[$input[3]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[3]?>" value="1" id="radio14" /><?php echo $test->tough->question[$input[3]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[3]?>" value="2" id="radio14" /><?php echo $test->tough->question[$input[3]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[3]?>" value="3" id="radio14" /><?php echo $test->tough->question[$input[3]]->option[3]; ?></p>
				<p id="info">Type: <span id="tcolor">Tough</span></p>
				             				</div>
                 <div id="q15">    <p id="ques">Q15. <?php echo $test->tough->question[$input[4]]->ques?> </p>
                 <input type="hidden" name="question15" value="<?php echo $input[4]?>">
                 <p id="option"><input type="radio" name="q2<?php echo $input[4]?>" value="0" id="radio15" /><?php echo $test->tough->question[$input[4]]->option[0]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[4]?>" value="1" id="radio15" /><?php echo $test->tough->question[$input[4]]->option[1]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[4]?>" value="2" id="radio15" /><?php echo $test->tough->question[$input[4]]->option[2]; ?></p>
                 <p id="option"><input type="radio" name="q2<?php echo $input[4]?>" value="3" id="radio15" /><?php echo $test->tough->question[$input[4]]->option[3]; ?></p>
				<p id="info">Type: <span id="tcolor">Tough</span></p>
									</div>
			 <img src="img/example-frame.png" width="839" height="41" id="frame"> 
			
			<div id="nav">
			<div>Click on the numbers to navigate between questions.</div>
			<span id="navd1"><a href="#" onclick="toggle1(); return false" onclick="toggle();">01</a></span>
			<span id="navd2"><a href="#" onclick="toggle2(); return false">02</a></span>
			<span id="navd3"><a href="#" onclick="toggle3(); return false">03</a></span>
			<span id="navd4"><a href="#" onclick="toggle4(); return false">04</a></span>
			<span id="navd5"><a href="#" onclick="toggle5(); return false">05</a></span>
			<span id="navd6"><a href="#" onclick="toggle6(); return false">06</a></span>
			<span id="navd7"><a href="#" onclick="toggle7(); return false">07</a></span>
			<span id="navd8"><a href="#" onclick="toggle8(); return false">08</a></span>
			<span id="navd9"><a href="#" onclick="toggle9(); return false">09</a></span>
			<span id="navd10"><a href="#" onclick="toggle10(); return false">10</a></span>
			<span id="navd11"><a href="#" onclick="toggle11(); return false">11</a></span>
			<span id="navd12"><a href="#" onclick="toggle12(); return false">12</a></span>
			<span id="navd13"><a href="#" onclick="toggle13(); return false">13</a></span>
			<span id="navd14"><a href="#" onclick="toggle14(); return false">14</a></span>
			<span id="navd15"><a href="#" onclick="toggle15(); return false">15</a></span></div>
			<input type="hidden" name="user" value="<?php echo $input[2]?>">
			<input type="hidden" name="user" value="<?php echo $input[2]?>">
<center><input type="submit" value="Leave the test" id="submit_but"/> 
</form>
		</div>
		
<div id="footer">By Prashant Baid and Binay Verma</div>
	</div>
</body>
</html>
