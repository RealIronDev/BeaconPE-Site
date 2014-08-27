@echo off
set Stay_Updated=no

Title BlockServer - Minecraft: Pocket Edition Server Software
Cls

ECHO Checking for Java installation...
WHERE java
IF %ERRORLEVEL% NEQ 0 (
	Cls
	ECHO Unable To Locate Java! 
	ECHO -------------------------------------------------
	ECHO Java is REQUIRED to run BlockServer/PocketBukkit!
	PAUSE
	EXIT
) ElSE (
	Cls
)

IF %Stay_Updated%==yes (
	set BSF=download
) ELSE (
	set BSF=decide
)

IF %BSF%==decide (
	IF EXIST BlockServer.jar (
		set BSF=run
	) ELSE (
		set BSF=download
	)
)

IF %BSF%==run (
	ECHO Starting Software...
	java -jar BlockServer.jar
) ELSE (
	IF %BSF%==download (
		ECHO Unable To Start Sever: No BlockServer JAR Found!
		ECHO Download a JAR at http://BlockServer.org or http://PocketBukkit.net
	) ELSE (
		ECHO Unable To Determine Required Function!
	)
)
PAUSE
EXIT