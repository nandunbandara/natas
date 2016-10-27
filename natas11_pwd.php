#!/usr/bin/php

#AUTHOR:NANDUN BANDARA
#27/10/16
#nandunb.wordpress.com

<?php


function xor_encode(){
	$key = 'qw8J';
    $text = json_encode(array("showpassword"=>"yes", "bgcolor"=>"#ffffff"));;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }
	
	return $outText;

}
print base64_encode(xor_encode());
echo "\n";
?>
