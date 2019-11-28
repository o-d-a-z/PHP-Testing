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
    
  ///////////////////////////////////////////ORIGINAL, WHOLE FILE///////////////////////////////////////////


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>HTML Testing</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<script src="js/jq.js"></script>
<script src="js/scripts.js"></script>
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

<body>
  <div class='container'>
    <div class="page-header" id="Header1">
      <h1><?php print $heading; ?><small id="small"><?php print $smalltext; ?></small></h1>
    </div>
    <div class="hero-unit" id="unhidden-button">
    <h1>Cool Button</h1>
    <p>You can press it. It takes you.. laterally..</p>
    <p>
      <a class="btn btn-primary btn-large" id="Learn-More">
        Learn more
      </a>
    </p>
    <p style="display:none;" id="hidden-text">This is hidden by default.</p>
  </div>
  <div class="hero-unit2" id="hidden-button" style="display:none">
  <h1>You are now in The Button Realm.</h1>
  <p>Press the button to return..</p>
  <p>
    <a class="btn btn-primary btn-large" id="Save-Me">
      Save Me
    </a>
  </p>
  <p style="display:none;" id="hidden-text">This is hidden by default.</p>
</div>
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
</body>
</html>
