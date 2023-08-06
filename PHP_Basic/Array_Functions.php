<?php

# Array_map Vs Array_walk

// array_map(callable, array,array)
// array_walk(array/object, callable, arg=null)

$arr = array('harmless', '<bad>', '>>>click here !<<<');

// print_r(array_map('htmlspecialchars', $arr));  // Array ( [0] => harmless [1] => <bad> [2] => >>>click here !<<< )
// echo array_map('htmlspecialchars', $arr); // Warning: Array to string conversion
// echo implode('', array_map('htmlspecialchars', $arr));  // harmless<bad>>>>click here !<<<

// array_walk(array, funcname)

$array = [1,2,3];

function cb($v, $k, $i){
	$v *=$i;
}

// Modify the array values: $a = [5,10,15]
array_walk($array, 'cb', 5);

// Return a new array: $b = [1,2,3]
$b = array_map((fn($v) => $v/5), $array);

// Iterate multiple arrays together
$x = [1,2,3];
$y= ['i', 'ii','iii'];
$z = ['I','II','III'];

array_map('LoopMultiArrays', $x, $y, $z);

function LoopMultiArrays ($a,$b,$c){
	echo "$a, $b, $c : "; // 1, i, I : 2, ii, II : 3, iii, III :
}
