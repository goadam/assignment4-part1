<?php
session_start();

?>

<html>
<head>
<title>content1</title>
</head>
<body>

<?php
	if(!isset($_SESSION['visits'])) {
		$_SESSION['visits'] = 0;
		$_SESSION['l'] = 0;
	}
	
	$username = $_POST['username'];
	
	if(strlen($username) > 0) {
		echo ("Hello " . $username . " you have visited this page " . $_SESSION['visits'] . " times before.");
		$_SESSION['visits']++;
		echo ("<br/>Click ");
		echo '<a href ="log.php">here</a>'; 
		echo(" to logout.");
	} else {
		echo ("A username must be entered.<br/>");
		echo ("Click ");
		echo '<a href="login.php">here</a>';
		echo (" to return to the login screen.");
	}
	
?>
</table>
</body>
</html>