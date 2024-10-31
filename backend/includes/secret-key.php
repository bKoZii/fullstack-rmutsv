<?php
function encryptIt($q) {
	$cryptKey = 'did,]Liuvjvo';
	$iv = substr(md5($cryptKey), 0, 16); // Ensure IV is 16 bytes long
	$qEncoded = base64_encode(openssl_encrypt($q, 'AES-256-CBC', md5($cryptKey), OPENSSL_RAW_DATA, $iv));
	return $qEncoded;
}

function decryptIt($q) {
    $cryptKey = 'did,]Liuvjvo';
    $qDecoded = rtrim(openssl_decrypt(base64_decode($q), 'AES-256-CBC', md5($cryptKey), OPENSSL_RAW_DATA, md5(md5($cryptKey))), "\0");
    return( $qDecoded );
}

// function encryptIt($q)
// {
// 	$cryptKey = 'did,]Liuvjvo';
// 	$qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
// 	return ($qEncoded);
// }

// function decryptIt($q)
// {
// 	$cryptKey = 'did,]Liuvjvo';
// 	$qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
// 	return ($qDecoded);
// }

?>