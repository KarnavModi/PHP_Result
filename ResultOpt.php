<?php
     
if(isset($_POST['Submit'])){ 
   
    $a1=$_POST['t1'];

    $a2=$_POST['t2'];

    $a3=$_POST['t3'];

    $a4=$_POST['t4'];
   
    $a5=$_POST['t5'];

$sum=$a2+$a3+$a4+$a5;

$avg=$sum/4;
if($avg>=0&&$avg<=50)
    $grade="fail";
if($avg>50&&$avg<=70)
    $grade="C Grade";
if($avg>70&&$avg<=80)
    $grade="B Grade";
if($avg>80&&$avg<=90)
    $grade="A2 Grade";
if($avg>90)
    $grade="A1 Grade";
}
?>