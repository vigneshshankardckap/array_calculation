<?php


$array=
[
    [4,-1,10,5,20],
    [12,9,-1,34,9],
    [-1,8,7,5,10],
    [1,2,4,-1,6],
    [15,-1,6,10,-1]
];

$allSumValues=[];

for($i=0;$i<count($array);$i++){

    // store the sum values 
   $sum=0;


    $check=false;

    for($j=0;$j<count($array);$j++){

       if($check)
       {
        // check the value next also -1 or not 
        if($array[$i][$j]==-1)
        {
            $check=false;
            break;
        }
        else
        {
            $sum+=$array[$i][$j];
        }

       }
       
       if($array[$i][$j]==-1)
       {
        $check=true;
       }

    }
// it means push the sum values form each array 
$allSumValues[]=$sum;
}
// this  is line find the which index max sum; 
print_r("The index maximum sum is" ." ".(array_keys($allSumValues,max($allSumValues))[0]));
echo "\n";
print_r($allSumValues);






































