<?php
echo "Host HTTP: ".$_SERVER['HTTP_HOST']."<br>";
echo "Host HTTP Port: ".$_SERVER['SERVER_PORT']."<br>";
echo "Host Server IP Address: ".$_SERVER['SERVER_ADDR']."<br>";
echo "Host Name Address: ".$_SERVER['SERVER_NAME']."<br>";
echo "Host Software: ".$_SERVER['SERVER_SOFTWARE']."<br>";
echo "Host HTTP Proto: ".$_SERVER['SERVER_PROTOCOL']."<br>";
echo "Req Method: ".$_SERVER['REQUEST_METHOD']."<br>";
echo "Req Time: ".$_SERVER['REQUEST_TIME']."<br>";
echo "Remote IP: ".$_SERVER['REMOTE_ADDR']."<br>";
echo "Remote Host: ".$_SERVER['REMOTE_HOST']."<br>";
echo "Remote Port: ".$_SERVER['REMOTE_PORT']."<br>";
echo "Path of current script: ".$_SERVER['SCRIPT_NAME']."<br>";
echo "Path of current page: ".$_SERVER['SCRIPT_URI']."<br>";
echo "The time is " . date("H:i:sa");
?>
