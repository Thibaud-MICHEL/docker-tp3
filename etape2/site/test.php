<?php
$mysqli = new mysqli('data', 'monuser', 'password', 'mabase');

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($mysqli->query("INSERT INTO mabase.matable (compteur) SELECT count(*)+1 FROM mabase.matable;") === TRUE) {
    echo "Count updated<br />";
}

if ($result = $mysqli->query("SELECT * FROM mabase.matable")) {
    printf("Count : %d<br />", $result->num_rows);  
    $result->close();
}

$mysqli->close();
?>
