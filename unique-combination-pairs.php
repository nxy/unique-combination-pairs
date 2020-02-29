<?php

function getUniqueCombinationPairs(array $items) : array {
	// Get item size
	$size = count($items);
	
	// Verify items
	if ($size === 0) return $items;
	
	// Calculate the ceiling
	$ceiling = $size - 1;
	
	// Init
	$i = 0;
	$x = 1;
	
	// Generate pairs
	while ($i < $ceiling) {
		$combinations[] = [$items[$i], $items[$x]];
		if ($x < $ceiling) $x++;
		else {
			$i += 1;
			$x = $i + 1;
		}
	}
	
	// Return combinations
	return $combinations;
}

/*
* input = [1, 2, 3, 4];
* output = [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]
*/

?>