<?php
$year = htmlspecialchars($_POST['year']);
// echo $year;

$linkToIndexPage = "
<p>
    <a href=\"/inputTask/index.php\">На главную</a>
</p>";

//if (preg_match("/[-]/",$year) or $year ==0) {
   // header('Location: /index.php');
 //   exit ("Год должен быть больше нуля! Пожалуйста, введите корректные данные! $linkToIndexPage");
//}
if (preg_match("/\\D/",$year) or $year ==0) {
    exit ("Пожалуйста, введите корректные данные $linkToIndexPage");
}


function isLeap($y){

    return $y % 4 == 0 && $y%100 !=0 || $y % 400 == 0;
}
$answer = isLeap($year);
if ($answer == true) {
    echo "$year год високосный";
    echo $linkToIndexPage;
    }
    else {
    echo "$year год не високосный";
        echo $linkToIndexPage;
}
