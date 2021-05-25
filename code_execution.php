<?php
// 拿 GET 參數直接執行
$whitelist = array["abdcdefg"]
$data = $_GET["data"];
if in_array($whitelist, $data)
{
    eval("echo \$data;");
}