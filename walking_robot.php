<?php
   function walking_robot($x, $y, $d, $ws) {
   	$d = strtoupper($d);
   	$walking_string = strtoupper($ws);
	$walking_array = str_split($walking_string);

	foreach( $walking_array as $key => $value ){
    	if( $value == 'W' ) { continue; }
      	if($d == 'EAST') {
            if( $value == 'L' ){
				$d = 'NORTH';
			} elseif( $value == 'R' ) {
				$d = 'SOUTH';
			} elseif( true == is_numeric( $value ) ) {
				$x = $x + $value;
			}
		} elseif ($d == 'WEST') {
            if( $value == 'L' ){
				$d = 'SOUTH';
			} elseif( $value == 'R' ) {
				$d = 'NORTH';
			} elseif( true == is_numeric( $value ) ) {
				$x = $x - $value;
			} 
		} elseif ($d == 'NORTH') {	
            if( $value == 'L' ){
				$d = 'WEST';
			} elseif( $value == 'R' ) {
				$d = 'EAST';
			} elseif( true == is_numeric( $value ) ) {
				$y = $y + $value;
			}
		} elseif ($d == 'SOUTH') {
            if( $value == 'L' ){
				$d = 'EAST';
			} elseif( $value == 'R' ) {
				$d = 'WEST';
			} elseif( true == is_numeric( $value ) ) {
				$y = $y - $value;
			}
		} else {
            echo "Provide Valid Arguments for Example: 5 2 SOUTH RW2LW4R";
		}	
           
	}
	return array('X' => $x, 'Y' => $y, 'D' => $d);
}

if(count($argv) == 5) {
	$result = walking_robot( $argv[1], $argv[2], $argv[3], $argv[4]);
	foreach ($result as $key => $value) {
		echo "$key => $value\n";
	}
} else {
	echo 'Invalid Perameter';
}


