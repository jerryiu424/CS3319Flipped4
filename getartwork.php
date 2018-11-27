<?php
 $whichMus = $_POST["pickamuseum"]; //get selected museum value from the form
 $query = "SELECT * FROM workofart WHERE whichmus=" . $whichMus; //fill in with correct query
 echo $query;
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>" . $row["artname"] . "BY" . $row["artist"] ."</li>";
 }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
