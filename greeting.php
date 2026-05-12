/*
PROGRAM: Welcome Message Form
This PHP script displays a simple HTML form
that asks the user to enter their name.

After submission, the program displays
a personalized welcome message.
*/

<?php

// Printing a welcome message
if ($_POST['user_name']) {
  print("Welcome, ");

  // Display entered username
  print($_POST['user_name']);
} else {
  /*-- DISPLAY INPUT FORM --*/
  echo "<FORM method='post' action='".$_SERVER['PHP_SELF']."'>";
  echo "Enter your name: <input type='text' name='user_name'>";
  echo "<BR/>";
  echo "<input type='submit' value='SUBMIT NAME'>";
  echo "</form>";
}

/* $_SERVER['PHP_SELF'] reloads the current PHP page after form submission */
?>
