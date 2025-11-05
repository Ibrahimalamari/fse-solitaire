<?php
include('config.php');

$sql="SELECT * FROM scores ORDER BY score DESC, duration ASC LIMIT 5";
$query=$mysql->prepare($sql);
$query->execute();
$array=$query->get_result();
$response=[];
while($article=$array->fetch_assoc()){
  $response[]=$article;
}
echo json_encode($response);
?>