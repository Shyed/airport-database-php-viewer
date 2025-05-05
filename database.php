<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "mac_250_airline"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM airport";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td>           
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Airport_code = $row["col1"];
        $Name = $row["col2"];
        $City = $row["col3"];
        $State = $row["col4"];
        
 
        echo '<tr> 
                  <td>'.$Airport_code.'</td> 
                  <td>'.$Name.'</td> 
                  <td>'.$City.'</td> 
                  <td>'.$State.'</td>                   
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>