<?php
$whitelist = array["lttstore.com"]
$url = $_GET["url"];
if in_array($whitelist, $url)
{
    $resp = file_get_contents($url); // Noncompliant
}