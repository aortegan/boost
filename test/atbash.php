<?php 

class Atbash {

	// Declaration of the 2 properties of the class
	// They will be used to encrypt/decrypt strings
	private $abc;
	private $cipher;

	// Class constructor
	public function __construct($abc,$cipher){
		$this->abc = $abc;
		$this->cipher = $cipher;
	}

	public function encrypt($text){
		$result = '';
		foreach(str_split($text) as $character){
			$result .= $this->switchLetters($character, $this->cipher, $this->abc);
		}
		return $result;
	}

	public function decrypt($text){

		// Declare empty string
		$result = '';
		foreach(str_split($text) as $character){
			// For each character of the string, we switched ther letter and add it at the end of the result string
			$result .= $this->switchLetters($character, $this->abc, $this->cipher);
		}
		return $result;
	}

	public function switchLetters($character, $s1, $s2){

		// Find position of character in string
		$pos = strpos($s2, $character);

		// If position exists, the letter can be switched, if not, we return the same character
		if ($pos !== false) {
			return $s1[$pos];
		} else {	
			return $character;
		}
	}

}

// English alphabet as the constant
$abc = 'abcdefghijklmnopqrstuvwxyz';
// Random shuffle of the constant
$cipher = 'oephjizkxdawubnytvfglqsrcm';

// Instance of a Atbash object with constant and cipher
$text = new Atbash($abc,$cipher);
// Call decrypt method of the object
$decrypt = $text->decrypt('knlfgnb, sj koqj o yvnewju');

echo $decrypt;

