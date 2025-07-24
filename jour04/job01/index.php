<form method="get">
  <label>Name:</label>
  <input type="text" />
  <label>Surname:</label>
  <input type="text" />
  <input type="submit" />
</form> 
<?php
echo "Le nombre d'arguments GET envoyé est: " . count($_GET) . "<br />";
?>