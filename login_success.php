
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
    session_start();

	if(isset($_SESSION['myusername']) && isset($_SESSION['mypassword'])){

        
        echo "<h1> Sucessfully login </h1>";
        
        echo '<a href="logout.php"><button>logout</button></a>';
	} 
	else {
		header("location:main_login.php");
	}



?>

