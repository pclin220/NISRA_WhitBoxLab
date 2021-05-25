<?php
$name = $_GET["name"];
$safename = htmlspecialchars($name)
echo "Welcome".$safename;