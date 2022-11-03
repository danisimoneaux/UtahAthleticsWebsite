<?php

require_once 'loginDB.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//code for create user table here
/*
$query = "create table users(
	forename varchar(128) not null,
	surname varchar(128) not null,
	username varchar(128) not null unique,
	password varchar(255) not null
)";

$result = $conn->query($query);
if(!$result) die($conn->error);
*/

//Bill Smith
/*
$forename = 'Bill';
$surname = 'Smith';
$username = 'bsmith';
$password = 'mysecret';
$sport = 'Volleyball';
$role = 'A';

$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $forename, $surname, $username, $token, $sport, $role);
*/

//Pauline Jones
$forename = 'Dani';
$surname = 'Simoneaux';
$username = 'danisimoneaux';
$password = 'Tu6sw3rp$$$';
$sport = 'Volleyball';
$role = 'A';
$token = password_hash($password,PASSWORD_DEFAULT); 

add_user($conn, $forename, $surname, $username, $token, $sport, $role);

function add_user($conn, $forename, $surname, $username, $token, $sport, $role){
	//code to add user here
	$query = "insert into user(firstname, lastname, username, password, sport, role) values ('$forename', '$surname', '$username', '$token', '$sport', '$role')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}



?>


