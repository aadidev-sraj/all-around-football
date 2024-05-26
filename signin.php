<?php 
echo $_GET['firstname'];
echo "<br>";
echo $_GET['lastname'];
echo "<br>";
echo $_GET['email'];
echo "<br>";
echo $_GET['password'];
echo "<br>";
echo $_GET['team'];

switch ('team') {
  case "barcelona":
    echo "Your favorite team is Barcelona!";
    break;
  case "realmadrid":
    echo "Your favorite team is Real Madrid!";
    break;
  case "manchestercity":
    echo "Your favorite team is Manchester City!";
    break;
  case "manchesterunited":
    echo "Your favorite team is Manchester United!";
    break;
  case "psg":
    echo "Your favorite team is PSG!";
    break;
}

?>
