<?php

$width = intval($_GET['picWidth']);
$height = intval($_GET['picHeight']);
$radius = intval($_GET['picRadius']);
$circleNum = intval($_GET['picCircles']);
$elipseSize = $radius * 2;

header ("Content-type: image/png");
$handle = ImageCreate ($width, $height) or die ("Cannot Create image");
$bg_color = ImageColorAllocate($handle, 255, 255, 255);
$line_color = ImageColorAllocate($handle, 0, 0, 0);
imageellipse($handle, 65, 25, $elipseSize, $elipseSize, $line_color);
ImagePng ($handle);