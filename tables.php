<?php
$servername="localhost";
$username="root";
$password ="1234";
$database="database7";
$conn= new mysqli($servername,$username,$password,$database);
if ($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
if ($conn->query("CREATE TABLE  info (
  id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname varchar(100) NOT NULL,
  lastname varchar(100) NOT NULL,
  email varchar(100) NOT NULL
) ;"))
{
echo "Table users is created";
}
else
echo "error caught";
}























