#!/bin/bash
Stay_Updated="no"

#Look for WGET or CURL commands
shopt -s expand_aliases
type wget > /dev/null 2>&1
if [ $? -eq 0 ]; then
  alias download="wget --no-check-certificate -q -O -"
else
  type curl >> /dev/null 2>&1
  if [ $? -eq 0 ]; then
    alias download="curl --insecure --silent --location"
  else
    echo "[FATAL] Unable to find WGET or CURL commands!"
    exit 1
  fi
fi

#Set BlockServer to redownload if Stay_Updated is enabled
if [ "$Stay_Updated" == "yes" ]; then
  PB="download"
else
  PB=""
fi

#Check what files exist (If at all)
if [ "$PB" == "" ]; then
  if [ -f ./BlockServer.jar ]; then
    PB="jar"
  else
    if [ -f ./src/java/net/blockserver/BlockServer.class ]; then
      PB="runsrc"
    else
      if [ -f ./src/java/net/blockserver/BlockServer.java ]; then
        PB="compile"
      else
        PB="download"
      fi
    fi
  fi
fi

if [ "$PB" == "jar" ]; then
  java -jar BlockServer.jar
else
  if [ "$PB" == "compile" ]; then
    echo "[WARNING] BlockServer needs to be compiled!"
    echo "[1/2] Compiling BlockServer..."
    javac src/java/net/blockserver/*.java
    javac src/java/net/blockserver/*/*.java
    javac src/java/net/blockserver/*/*/*.java
    javac src/java/net/blockserver/*/*/*/*.java
    echo "Done!"
    echo "[2/2] Starting BlockServer..."
    java src/java/net/blockserver/BlockServer.class
  else
    if [ "$PB" == "download" ]; then
      echo "[INFO] BlockServer downloader for Linux & Mac"
      echo "[1/3] Cleaning directory..."
      if [ -f ./start.bat ]; then
        rm -r start.bat
      fi
      if [ -f ./BlockServer.jar ]; then
        rm -r BlockServer.jar
      fi
      if [ -f ./src/java/net/blockserver/BlockServer.java ]; then
        rm -r -f src/
      fi
      if [ -f ./src/java/net/blockserver/BlockServer.class ]; then
        rm -r -f src/
      fi
      echo "Done!"
      echo "[2/3] Downloading latest BlockServer JAR..."
      download "http://pocketbukkit.net/download/software/latest"
      echo "Done!"
      echo "[3/3] Starting BlockServer..."
      java -jar BlockServer.jar
    else
      if [ "$PB" == "runsrc" ]; then
        java src/java/net/blockserver/BlockServer.class
      else
        echo "[FATAL] Unable to determine required operation!"
        exit 1
      fi
    fi
  fi
fi