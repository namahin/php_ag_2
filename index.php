<?php

$tuition_fee = 12000;
$commission = $tuition_fee*1/100;
$twenty_five = $commission*25;
$twenty = $commission*20;
$fifteen = $commission*15;

if($tuition_fee > 20000){
    echo "The commission is 25% = $twenty_five";
}

else if($tuition_fee > 10000 && $tuition_fee < 20000){
    echo "The commission is 20% = $twenty";
}

else if($tuition_fee > 7000 && $tuition_fee < 10000){
    echo "The commission is 15% = $fifteen";
}

else if($tuition_fee < 7000){
    echo "Invalid Data";
}

else{
    return 0;
}

?>