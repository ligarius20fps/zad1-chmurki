<?php

$nowy_york = new DateTime("now", new DateTimeZone('America/New_York') );
$lublin=new DateTime("now", new DateTimeZone('Europe/Warsaw') );
$sydney=new DateTime("now", new DateTimeZone('Australia/Sydney') );
echo "Nowy Jork: ".$nowy_york->format('H:i, j F')."<br/>";
echo "Lublin: ".$lublin->format('H:i, j F')."<br/>";
echo "Sydney: ".$sydney->format('H:i, j F')."<br/>";
