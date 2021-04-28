<?php
	session_start();
	if (isset($_SESSION['level']) && isset($_SESSION['username']))
	{
		if($_SESSION['level'] == "admin")
		{
			
		}
		else if ($_SESSION['level'] == "user")
		{
			header('location:../home.php');
		}
	}
	if(!isset($_SESSION['level']))
	{
		echo "<a href='login.php'>Login</a>";
		echo "<a href='register.php'>Belum punya User?</a>";
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=pages/index.html">
<title>BB News</title>
<script language="javascript">
    window.location.href = "pages/index.html"
</script>
</head>
<body>
Go to <a href="pages/index.php">/pages/index.php</a>
</body>
</html>
