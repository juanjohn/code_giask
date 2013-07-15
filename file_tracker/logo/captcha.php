<?php
header('Content-type:image/png');
$text="J-Tracker";

$f_size=45;


$im = @imagecreatetruecolor(280, 100);

imagesavealpha($im, true);
imagealphablending($im, true);

$white = imagecolorallocatealpha($im, 255, 255, 255, 127);
imagefill($im, 0, 0, $white);

$lime = imagecolorallocate($im, 204, 255, 51);
imagettftext($im, $f_size, 0, 30, 60, $lime, "Byron Medium.ttf", $text);
imagepng($im);
imagedestroy($im);