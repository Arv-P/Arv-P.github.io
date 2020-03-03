<?php
	session_start();

    echo "<link href='Homepagestyles.css' rel='stylesheet'>";
	echo "<link href='WOW_Style.css' rel='stylesheet'>";
	echo "<link href='WOW_Style2.css' rel='stylesheet'>";
	
	
	echo "<img src='images/Words.jpg' class='img' width='100%' height='100%' alt='BGimg'>";
	
	echo "<div id='biggestbox'>";
		
	
	
$servername = "localhost";
$username = "root";
$password = "secret";
$dbname = "WOWwords";
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from words order by rand() limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{	
		$r = $result->fetch_assoc();
		
		//Change later
		$ans=$r['Word'];
		
		$Word_arr=str_split(strtoupper($r['Word']),1);
		shuffle($Word_arr);
		
		$i;
		
		$_SESSION['ans']=$ans;
		
		for ($i=0; $i<7; $i++)
			{ 	
				
				$l=$Word_arr[$i];
				echo "<button class='button2' value='$l'><h3>$l</h3></button>";
		
			}
		
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
		echo "<br/><br/>";
		echo "<a href='WordCheck.php'><input type='button' class='button' value='New Word'></a>";
		echo "<a href='Display_ans.php'><input type='button' class='button' value='See Word'></a>";
		echo "<a href='Homepage.html'><input type='button' class='button' value='Main Menu'></a>";
	}
else 
	{
		echo "Nothing...";
	}
	

$conn->close();

echo "</div>";
?>