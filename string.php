<?php 
$stringArray=['Hello', 'World', 'PHP', 'Programming'];
$vouel=['a','e','i','o','u'];

foreach($stringArray as $item){
    $vouelCount=[];
    $reverse=[];
    $arr= str_split($item);
    foreach($arr as $careh){
        $careh=strtolower($careh);
        if(in_array($careh,$vouel)){
            array_push($vouelCount, $careh);
        }
    }
    echo 'Original String:'.$item. ', Vowel Count ='. count($vouelCount).', Reversed String:';
    
    for($i=count($arr)-1; $i>=0; $i--){
       array_push($reverse,$arr[$i]);
    }
     echo implode('',$reverse). '</br>';

}
?>