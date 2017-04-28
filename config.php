<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sovann
 * Date: 3/16/17
 * Time: 8:55 PM
 */

/*
   Change the following variables
   to match your local/live serv-
   er, mySQL database, and mySQL
   table. As well as the proper
   credentials.
*/
$server = "mysql.cs.iastate.edu";
$username = "dbu319team131";
$password = "Y2YwYzBjMTI2";
$db_name = "db319team131";

$db_table = "accounts";
$db_table2 = "posts";
$db_table3 = "messages";


// Create connection
$conn = new mysqli($server, $username, $password, $db_name) or die("Cannot connect to server");


