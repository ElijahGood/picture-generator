<?php

$width = intval($_GET['picWidth']);
$height = intval($_GET['picHeight']);
$radius = intval($_GET['picRadius']);
$circleNum = intval($_GET['picCircles']);
$ellipseSize = $radius * 2;
$minEllipseX = $radius;
$minEllipseY = $radius;
$maxEllipseX = $width - $radius;
$maxEllipseY = $height - $radius;

$colorArray = [
    1 => [0, 0, 255],
    2 => [255, 0, 0],
    3 => [0, 255, 0],
    4 => [0, 0, 0],
    5 => [255, 255, 0]
];

header ("Content-type: image/png");
$canvas = imagecreate($width, $height) or die ("Cannot Create image");
$bg_color = imagecolorallocate($canvas, 255, 255, 255);
for ($i = 0; $i < $circleNum; $i++) {
    //random values here
    $tmpX = rand($minEllipseX, $maxEllipseX);
    $tmpY = rand($minEllipseY, $maxEllipseY);

    $tmpColor = rand(1, 5);
    $red = $colorArray[$tmpColor][0];
    $green = $colorArray[$tmpColor][1];
    $blue = $colorArray[$tmpColor][2];

    $ellipseColor = imagecolorallocate($canvas, $red, $green, $blue);
    imageellipse($canvas, $tmpX, $tmpY, $ellipseSize, $ellipseSize, $ellipseColor);
}
imagepng($canvas);