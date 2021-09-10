<?php
/**
 * This function converts the
 * submitted Binary Number to
 * Decimal Number
 *
 * Working of Algorithm
 * (10) base 2
 * (1*(2^1) + 0 * (2^0)) base 10
 * (2 + 0) base 10
 * 2 base 10
 *
 * @param string $binaryNUmber
 * @return int
 */
function binaryToDecimal($binaryNUmber)
{
	if(!is_numeric($binaryNUmber)){
		throw new Exception("Please pass a valid Binary Number for Converting it to a Decimal Number.", 1);
	}

	$decimalNumber = 0;
	$binaryDigits = array_reverse(str_split($binaryNUmber));

	foreach ($$binaryDigits as $index => $digit) {
		// code...
		$decimalNumber += $digit * pow(2, $index);
	}

	return $decimalNumber;
}

/**
 * This function converts the
 * submitted Decimal Number to 
 * Binary Number
 *
 * @param string $decimalNumber
 * @return string
 */
function decimalToBinary($decimalNumber)
{
	if (!is_numeric($decimalNumber)) {
		// code...
		throw new Exception("Please pass a valid Decimal Number for Converting it to a Binary Number.", 1);
	}

	$binaryNUmber = '';

	while($decimalNumber > 0){
		$binaryNUmber = ($decimalNumber % 2) . $binaryNUmber;
		$decimalNumber /= 2;
	}

	return $binaryNUmber;
}