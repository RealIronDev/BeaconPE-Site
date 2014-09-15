<html>
  <head><title>
    Downloads
  </title></head>
  <body>
    <table>
      <tr>
        <th>Pull request ID</th>
        <th>Branch</th>
        <th>Commit</th>
        <th>Download link</th>
      </tr>
      <?php
$ext = "phar";
if(!isset($_GET["repo"])){
  $repo_name = "BlockServer";
}
else{
  $repo_name = $_GET["repo"];
}
$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "builds" . DIRECTORY_SEPARATOR . $repo_name . DIRECTORY_SEPARATOR;
if(is_dir($dir)){
  $directory = dir($dir);
  $files = array();
  while(($file = $directory->read()) !== false){
    if(is_file($dir . $file) and strtolower(substr($file, -1 - strlen($ext))) === strtolower($ext)){
      $at = strpos($file, "@");
      $hash = strpos($file, "#");
      $pr = substr($file, 0, $at);
      $branch = substr($file, $at + 1, $hash);
      $commit = strstr(substr($file, $hash + 1), ".", true);
      if(isset($_GET["pr"])){
        if(!in_array($pr, explode(",", $_GET["pr"]))){
          continue;
        }
      }
      if(isset($_GET["branches"])){
        if(!in_array($branch, explode(",", $_GET["branches"]))){
          continue;
        }
      }
      $files[filemtime($dir . $file)] = ["pr" => $pr, "branch" => $branch, "commit" => $commit];
    }
  }
  $directory->close();
  ksort($files);
  foreach($files as $file){
    $pr = $file["pr"];
    $branch = $file["branch"];
    $commit = $file["commit"];
    echo "<tr>";
    echo "<td>" . (is_numeric($pr) ? "$pr":"N/A") . "</td>";
    echo "<td>$branch</td>";
    echo "<td>$commit</td>";
    echo "<td><a href=\"builds/$file\">Download</a></td>";
    echo "</tr>";
  }
}
      ?>
    </table>
  </body>
</html>
