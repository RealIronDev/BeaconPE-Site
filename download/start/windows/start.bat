@echo off
set Stay_Updated=no

Title BlockServer Console
Cls
IF %Stay_Updated% == yes (
  set PB=download
) ELSE (
  set PB=determine
)

IF %PB% == determine (
  IF EXIST BlockServer.jar (
    set PB=jar
  ) ELSE (
    IF EXIST src/java/net/blockserver/BlockServer.class (
      set PB=runsrc
    ) ELSE (
      IF EXIST src/java/net/blockserver/BlockServer.java (
        set PB=compile
      ) ELSE (
        set PB=download
      )
    )
  )
)

IF %PB% == jar (
  java -jar BlockServer.jar
) ELSE (
  IF %PB% == compile (
    ECHO [WARNING] BlockServer needs to be compiled!
    ECHO --------------------------------------------------------------
    ECHO [1/2] Compiling BlockServer...
    javac src/java/net/blockserver/*.java
    javac src/java/net/blockserver/*/*.java
    javac src/java/net/blockserver/*/*/*.java
    ECHO Done!
    ECHO --------------------------------------------------------------
    ECHO [2/2] Starting BlockServer...
    ECHO --------------------------------------------------------------
    java src/java/net/blockserver/BlockServer.class
  ) ELSE (
    IF %PB% == download (
      ECHO [INFO] BlockServer downloader for Windows
      ECHO --------------------------------------------------------------
      ECHO [1/3] Cleaning directory...
      IF EXIST start.sh (
        ECHO Removing start.sh...
        del start.sh
      )
      IF EXIST BlockServer.jar (
        ECHO Removing BlockServer.jar
        del BlockServer.jar
      )
      IF EXIST src/java/net/blockserver/BlockServer.java (
        ECHO Removing src directory...
        rmdir src/
      )
      IF EXIST src/java/net/blockserver/BlockServer.class (
        ECHO Removing src directory...
        rmdir src/
      )
      ECHO Done!
      ECHO --------------------------------------------------------------
      ECHO [2/3] Downloading latest BlockServer JAR...
      ECHO Done!
      ECHO --------------------------------------------------------------
      ECHO [3/3] Starting BlockServer...
      ECHO --------------------------------------------------------------
      IF EXIST BlockServer.jar (
        java -jar BlockServer.jar
      ) ELSE (
        ECHO [FATAL] Unable to locate BlockServer.jar!
        PAUSE
      )
    ) ELSE (
      IF %PB% == runsrc (
        java src/java/net/blockserver/BlockServer.class
      ) ELSE (
        ECHO [FATAL] Unable to determine required operation!
        PAUSE
      )
    )
  )
)
EXIT