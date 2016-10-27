#!/usr/bin/php

#AUTHOR:NANDUN BANDARA
#27/10/16
#nandunb.wordpress.com

<?php

$cookie = base64_decode('ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D');
function xor_decode($string){
	$key = json_encode(array("showpassword"=>"no", "bgcolor"=>"#ffffff"));
    $text = $string;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }
	
	return $outText;

}
print xor_decode($cookie);
echo "\n";
?>
