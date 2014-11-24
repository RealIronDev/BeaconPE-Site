<?php

$CLONE_URL = "https://github.com/BlockServerProject/BlockServer-IO-Lib.git";

$BUILD_DIR = "build";
$DL_CMD = "cd $BUILD_DIR && git clone $CLONE_URL";
$BUILD_CMD = "ant compile";

if( $_POST['payload']){ //Make sure its from github
  shell_exec($DL_CMD);
  shell_exec("cd BlockServer-IO-Lib");
  $output = shell_exec($BUILD_CMD);
  if(strpos($output, "FAILED") !== false){
    //Success
    echo("Build succeded.");
  } else {
     //Failure
     echo("Build failed.");
  }
  
?>
