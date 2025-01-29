<?php

// set cores 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//GET CURRENT DATE

$current_date = gmdate("Y-m-d\TH:i:s\z");


// My response array
$response = [
  "email" => "deyeye99@gmail.com",
  "current_datetime" => $current_date,
  "github_url" => "https://github.com/scribeNcode/hng12_stage0"
];

// convert array to json and output it 
echo json_encode($response);

?>




