<?php
	session_start();
	include "koneksi.php";
 ?>
 
 <html>
 <body>
 <header>
 </header>
 <h2> Login </h2>
 
 <form action="ceklogin.php" method="post">
	<label> User / Email : </label><br>
	<input type="text" id="username" name="userlogin"><br>
	<label> Password : </label><br>
	<input type="password" id="password" name="passlogin"><br><br>
	<input type="submit" value="Submit">
 </form>
 
 </body>
 </html>