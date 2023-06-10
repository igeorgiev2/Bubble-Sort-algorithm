<?php


namespace IterativeSortingAlgorithms;

function bubbleSort(&$testArray)
{
    $arrayLength = count($testArray);
    $timeStart = microtime(true);
    for ($i = 0; $i < $arrayLength - 1; $i++) {
    
        // $arrayLength - $i - 1, because every last element will be sorted.
        for ($j = 0; $j < $arrayLength - $i - 1; $j++) {
            if ($testArray[$j + 1] < $testArray[$j]) {
                $temporaryElement = $testArray[$j];
                $testArray[$j] = $testArray[$j + 1];
                $testArray[$j + 1] = $temporaryElement;
            }
        }

    }
    $timeEnd = microtime(true);
    
    // Add 1 second to convert from scientific notation.
    $timeExecution = ($timeEnd - $timeStart) + 1;
    echo "Execution time: " . round($timeExecution, 10) . " seconds \n";
    return $testArray;
}

$testArray = array(4, 56, 89, 0, 23, 11, 64);
$testArrayLength = count($testArray);
$sortedArray = bubbleSort($testArray);

// You can test more options.
// $testArray = range(0, 1000);
// shuffle($testArray);
// $testArrayLength = count($testArray);
// $sortedArray = selectionSort($testArray);

echo "Sorted array:";
for ($i = 0; $i < $testArrayLength; $i++) {
    echo ' ' . $testArray[$i];
}

?>
