<?php
include_once 'ResultOpt.php';
echo '<br/>';
echo '<br/>';
if($grade!='fail'){
    echo '<body bgcolor="green">';     
    echo '<h1> Congratulations '.$a1.', You clear the exam with '.$grade.' and your score is '.$avg.'.</h1>';
    echo '</body>';
 }
 else {
    echo '<body bgcolor="cyan">';     
    echo '<h1 style="color:red"> Sorry '.$a1.', You '.$grade.' the exam with '.$avg.' score.</h1>';
    echo '</body>';
} 