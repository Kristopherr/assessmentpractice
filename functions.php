<?php
include 'partials/header.php';

function calculateArea($length, $width)
{
    $area = $length * $width;
    return $area;
}
$result = calculateArea(5,10);
echo  'the area is = ' . $result;



//deffo not uppercase
$notUpperCase = strtoupper('<br> hello Azeem </br>');
echo $notUpperCase;

//split it into array
$strArr ='Hello, Azeem has hacked my pc. Please send help';
print_r (explode(' ', $strArr));

//count array
echo '<br>',count(explode(' ', $strArr));
?>

<?php
//azeem
$azeem = rand(1,100);
echo '<br>', $azeem;

//round down to nearest whole number
$floorIsLava = 5.7;
echo '<br>', floor($floorIsLava);
?>

<?php
include 'partials/footer.php';
?>