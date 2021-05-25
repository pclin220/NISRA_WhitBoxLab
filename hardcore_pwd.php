<?php
// example of an empty password when connecting to a mysql database
$password = getenv("MYSQL_PASSWD")
$conn = new mysqli($servername, $username, $password);
$result = mysqli_query($conn, $query);

