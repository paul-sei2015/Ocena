<?php
	// If login form is posted, log the user in
	/*if(isset($_POST['login'])) {
		userLogin($_POST['username'], $_POST['password']);
	}*/
	
	if (isset($_POST['signin_student'])) {
   	studentSignin();
	}

   if (isset($_POST['logout'])) {
      logout();
   }
   
   if (isset($_POST['red'])) {
      changeTheme("red");
   }
   if (isset($_POST['blue'])) {
      changeTheme("blue");
   }

?>