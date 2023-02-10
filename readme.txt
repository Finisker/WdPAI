Web app design class project - Game Support

Simple web app that allows you to roll dices and store scoreboards.

Technologies:
-PHP
-HTML
-CSS
-JS
-PostgreSQL

------------------------------------------------------------------------------------------------

How to connect to database from your device:

---------------------------------------------------------------
Add config.php file to WdPAI directory

    <?php

    const USERNAME = 'postgres'; Your username
    const PASSWORD = ''; Your password
    const HOST = 'ipconfig IPv4'; Your IPv4
    const DATABASE = 'Test'; Your database name
---------------------------------------------------------------

Modfy pg_hba, for me it is:
D:\PROGRAMY\PostgreSQL\data\pg_hba

Add line under IPv4:

    host    all  	    	all  		ipconfig IPv4/mask      scram-sha-256