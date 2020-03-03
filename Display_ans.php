<?php	
	session_start();
	
	echo "<link href='Homepagestyles.css' rel='stylesheet'>";
	echo "<link href='WOW_Style.css' rel='stylesheet'>";
	
	echo "<img src='images/Words.jpg' class='img' width='100%' height='100%' alt='BGimg'>";
	
	echo "<div id='biggestbox'>";
		
	echo "<div id='one'>" . $_SESSION['ans'] . "</div>";
	echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	echo "<a href='WordCheck.php'><input type='button' class='button' value='New Word'></a>";
	

	echo "</div>";
?>