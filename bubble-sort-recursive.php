<?php


namespace IterativeSortingAlgorithms;

function recursiveBubbleSort(&$testArray, $arrayLength, $memoryStart)
{
    if ($arrayLength == 1) {
    	$memoryEnd = memory_get_usage();
    	echo "Memory used: " . abs($memoryEnd - $memoryStart) . " bytes\n";
        return;
    }
    for ($i = 0; $i < $arrayLength - 1; $i++) {
        if ($testArray[$i + 1] < $testArray[$i]) {
            $temporaryElement = $testArray[$i];
            $testArray[$i] = $testArray[$i + 1];
            $testArray[$i + 1] = $temporaryElement;
        }
    }
    recursiveBubbleSort($testArray, $arrayLength - 1, $memoryStart);
}

$testArray = array(4, 56, 89, 0, 23, 11, 64);
$testArrayLength = count($testArray);
$memoryStart = memory_get_usage();
$timeStart = microtime(true);
recursiveBubbleSort($testArray, $testArrayLength, $memoryStart);
$timeEnd = microtime(true);

// Add 1 second to convert from scientific notation.
$timeExecution = ($timeEnd - $timeStart) + 1;
echo "Execution time: " . round($timeExecution, 10) . " seconds\n";
echo "Sorted array:";
for ($i = 0; $i < $testArrayLength; $i++) {
    echo ' ' . $testArray[$i];
}

?>
