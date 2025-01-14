<?php
include 'partials/header.php';
// score variable
$score = 80;
if($score >= 70)
{
    //echo displays the following information.
    echo 'Congratulations! You Passed the exam!';
} else 
{
    echo 'Ooops, You did not pass the exam!';
}


?>

<?php
include 'partials/footer.php';
?>