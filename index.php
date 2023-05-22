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

   $sum=0;

    $check=false;

    for($j=0;$j<count($array);$j++){

       if($check)
       {

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
    // echo $sum ."\n";

$allSumValues[]=$sum;

}
print_r("The index maximum sum is" ." ".(array_keys($allSumValues,max($allSumValues))[0]));
echo "\n";
print_r($allSumValues);


































// $toatlarr=[];
//  $result=0;

//  $columnTotal = [];
// for($i=1;$i<=3;$i++){

//     for($j=1;$j<=3;$j++){
//         if($i==1){
//             $result+= $j *3;
//             // $columnTotal[$j-1] += $j * 3;
//         }
//         if($i==2){
//             $result+= $j *5;
//             // $columnTotal[$j-1] += $j *5;
//         }
//         if($i==3){
//             $result+= $j *10;
//             // $columnTotal[$j-1] += $j  * 10;
//         }
//         // if($i!=$j){
//         //     echo " ";
//         // }
//         // else{
//         //     echo $j;
 
//         // }  
//         if($i==1 &&  $j==3){
            
//         }


//     }

//     echo "\n";
//     array_push($toatlarr,$result);
//     $result=0; 
// }



