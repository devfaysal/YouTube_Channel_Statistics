<?php
/*
 * Database information.
 * All fields are required
 */
//Database host: Most of the time it is 'localhost'
$db_host = 'localhost';
//Database Name: Name of the database which you want to connect whith this application
$db_name = '';
//Database Username: Username which have all priviledges to the database that you want to connect
$db_user = '';
//Password: Password of the user that you added
$db_pass = '';
//Youtube Api key
$yt_api = '';


/*
 * Do not modify anything from here
 */
//Database connection: You do not need to change anything here
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
