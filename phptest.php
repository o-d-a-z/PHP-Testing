<?php
DEFINE('DB_USERNAME', 'root');
 DEFINE('DB_PASSWORD', 'root');
 DEFINE('DB_HOST', 'localhost');
 DEFINE('DB_DATABASE', 'performance_schema');

 $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if (mysqli_connect_error()) {
   die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }

 echo 'Connected successfully.';

$heading='Coolsite V1';
$smalltext='The Coolest website on LAN'

?>
  <div class="row">
  <?php
  $sql = "SELECT username, email, FROM users";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo " Username: " . $row["username"]. " Email: " . $row["email"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
  ?>
    </div>
    
  
