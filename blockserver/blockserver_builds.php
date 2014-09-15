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
$dir = dirname(__FILE__) . DIRECTORY_SEPERATOR . "builds" . DIRECTORY_SEPARATOR;
$directory = dir($dir);
while(($file = $directory->read()) !== false){
  if(is_file($dir . $file) and strtolower(substr($file, -1 - strlen($ext))) === strtolower($ext)){
    $at = strpos($file, "@");
    $hash = strpos($file, "#");
    $pr = substr($file, 0, $at);
    $branch = substr($file, $at + 1, $hash);
    $commit = strstr(substr($file, $hash + 1), ".", true);
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
