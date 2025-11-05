<?php
include('config.php');
$sql="SELECT * FROM scores";
$query=$mysql->prepare($sql);
$query->execute();
$array=$query->get_result();
$response=[];
while($article=$array->fetch_assoc()){
  $response[]=$article;
}
echo json_encode($response);