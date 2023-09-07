<?php

// check if slack_name and track are set
if (!isset($_GET['slack_name']) || !isset($_GET['track'])) {
    exit();
}

// get required info
$slack_name = $_GET['slack_name'];
$track = $_GET['track'];

// current day of the week
$current_day = date("l");

// current UTC time
$utc_time = gmdate('Y-m-d\TH:i:s\Z', time());

// Github details
$github_file_url = "https://github.com/adelekeogunsona/hng-stage-one/blob/main/api/index.php";
$github_repo_url = "https://github.com/adelekeogunsona/hng-stage-one";

// return json response
$response = json_encode([
    'slack_name' => $slack_name,
    'current_day' => $current_day,
    'utc_time' => $utc_time,
    'track' => $track,
    'github_file_url' => $github_file_url,
    'github_repo_url' => $github_repo_url,
    'status_code' => http_response_code(),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

echo $response;

?>
