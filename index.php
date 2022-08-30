<?php

$arrayToSort = [4, 5, 8, 9, 1, 7, 2];

function array_swap(&$arr, $num)
{
    $elementToSwap = $arr[$num];
    $arr[$num] = $arr[0];
    $arr[0] = $elementToSwap;
}

$unsortedElements = count($arrayToSort);

while ($unsortedElements > 1){
    $maxValueIndex = 0;
    for($j = 1; $j < $unsortedElements; $j++) {
        if ($arrayToSort[$j] > $arrayToSort[$maxValueIndex]) {
            $maxValueIndex = $j;
        }
    }

    array_swap($arrayToSort, $maxValueIndex);
    array_swap($arrayToSort, $unsortedElements-1);
    $unsortedElements -= 1;
}

print_r($arrayToSort);
