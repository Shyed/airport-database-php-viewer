/*
PROGRAM: Airport Database Table Display
This PHP script connects to a MySQL database,
retrieves records from the airport table,
and displays the results in an HTML table.

DATABASE:
mac_250_airline

TABLE:
airport
*/

<html>
<body>
<?php 

/*-- DATABASE CONNECTION SETTINGS --*/
$username = "root"; 
$password = ""; 
$database = "mac_250_airline"; 

/*-- CREATE DATABASE CONNECTION --*/
$mysqli = new mysqli("localhost", $username, $password, $database); 

/*-- SQL QUERY --*/
$query = "SELECT * FROM airport"; // Retrieve all records from airport table
 
/*-- DISPLAY TABLE HEADER --*/
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td>           
      </tr>';

/*-- EXECUTE QUERY AND DISPLAY RESULTS --*/
if ($result = $mysqli->query($query)) {

    // Loop through each database row
    while ($row = $result->fetch_assoc()) {
        // Retrieve column values
        $Airport_code = $row["col1"];
        $Name = $row["col2"];
        $City = $row["col3"];
        $State = $row["col4"];
        
        /*-- DISPLAY TABLE--*/
        echo '<tr> 
                  <td>'.$Airport_code.'</td> 
                  <td>'.$Name.'</td> 
                  <td>'.$City.'</td> 
                  <td>'.$State.'</td>                   
              </tr>';
    }

    // Free result memory
    $result->free();
} 
?>
</body>
</html>
