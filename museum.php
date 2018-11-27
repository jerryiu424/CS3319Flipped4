<!DOCTYPE html>
<html>
<head>
	<title>Worldwide Museums</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="museum.js"></script>
<h1>Museums of the World </h1>
Select your museum:
<?php
 include "connectdb.php"
?>
<form action="" method="POST">
<select name="pickamuseum"  id="pickamuseum">
  <option value="1">Select Here</option>
  <?php
    include "getmuseum.php"
  ?>
</select>
</form>

<?php
 if (isset($_POST['pickamuseum'])) {
 include "connectdb.php";
 include "getartwork.php";
 } //end of if
?>

<hr>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

