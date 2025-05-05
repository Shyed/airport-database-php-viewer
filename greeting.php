<?php
// Printing a welcome message
if ($_POST['user_name']) {
  print("Welcome, ");
  print($_POST['user_name']);
} else {
  // Printing form
  echo "<FORM method='post' action='".$_SERVER['PHP_SELF']."'>";
  echo "Enter your name: <input type='text' name='user_name'>";
  echo "<BR/>";
  echo "<input type='submit' value='SUBMIT NAME'>";
  echo "</form>";
}
?>