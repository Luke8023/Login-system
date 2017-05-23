<?php

$conn = mysqli_connect("localhost", "root", "", "coop_database");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
