<?php
@define("REPO_URL", "https://api.github.com/repos/LegendOfMCPE/StatsCore");
$extensin = "phar";
if(!isset($_POST["commit"], $_POST["branch"], $_POST["pr"], $_FILE["build"])){
  echo "400 bad request - Insufficient parameters passed";
  http_response_code(400);
}
else{
  @mkdir($dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "builds" . DIRECTORY_SEPARATOR);
  $branch = $_POST["branch"];
  $pr = $_POST["pr"];
  $commit = $_POST["commit"];
  $file = $dir . "$pr@$branch#$commit." . $extension;
  if(is_file($file)){
    echo "403 forbidden - build already exists for such file";
    http_response_code(403);
  }
  else{
    $upload = $_FILES["build"];
    if($upload["error"] > 0){
      echo "400 bar request: Error with upload file: " . $file["error"];
      http_response_code(400);
    }
    else{
      if(match_github_commit($commit, REPO_URL, $branch, $pr)){
        if(move_uploaded_file($upload["tmp_name"], $file)){
          echo "201 created - file $file is now in the archive.";
          http_response_code(201);
        }
        else{
          echo "500 internal server error - cannot save file into archive";
          http_response_code(500);
        }
      }
      else{
        echo "403 forbidden - the commit does not match the result from GitHub API";
       http_response_code(403);
      }
    }
  }
}
function match_github_commit($commit, $url, $branch, $pr = "false"){
  if($pr === false or $pr === "false"){
    $data = cj_get("$url/branches/$branch");
    $real = $data["commit"]["sha"];
    return substr($real, 0, strlen($commit)) === $commit
        or substr($commit, 0, strlen($real)) === $real;
  }
  else{
    $pr = cj_get("$url/pulls/$pr");
    $real = $pr["head"]["sha"];
    return substr($real, 0, strlen($commit)) === $commit
        or substr($commit, 0, strlen($real)) === $real;
  }
}
function cj_get($link){
  $ch = curl_init($link);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  return json_decode(curl_exec($link));
?>
