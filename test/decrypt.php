<?php

$const = 'abcdefghijklmnopqrstuvwxyz';
$cipher = 'oephjizkxdawubnytvfglqsrcm';

$in = 'knlfgnb, sj koqj o yvnewju';
$out = '';


function decrypt($const, $cipher, $in){

	// In string to array
	$array_in = str_split($in);
	// Declare empty Out array
	$array_out = [];

	foreach ($array_in as $character) {

		// If character exists in string, proceed to decrypt.
		// Wer are not considering special characters, only letters are decrypted
		if (strpos($cipher,$character) !== false) {

			// Character has been found, we get its position in the cipher string
			$pos = strpos($cipher,$character);

			// Find value of given position in const string and push it into Out array
			array_push($array_out,substr($const,$pos,1));

		} else {

			// If not a letter, push the character into Out array
			array_push($array_out,$character);
		}
		
	}

	// Out array to string
	$decrypted = implode($array_out);

	// Return decrypted string
	return $decrypted;
}

// Call Decrypt function
$out = decrypt($const,$cipher,$in);

// Print given information
print "CONST = '".$const."'\n";
print "cipher = '".$cipher."'\n\n";
print "encrypted text = '".$in."'\n";

// Print decrypted string
print "decrypted text = '".$out."'";