<?php
include('config.php');


$username =$_POST['username'] ?? '';
$score =$_POST['score'] ?? 0;
$duration =$_POST['duration'] ?? 0; // duration in seconds or minutes


$sql ="INSERT INTO scores (username, score, duration) VALUES (?, ?, ?)";
$query =$mysql->prepare($sql);
$query->execute();

    

?>
