<?php
/* openssl data */ 
$simple_string = '!@#$%^&*()!@#$%^&*())(*&^%$#@!qwertyuiopasdfghjklzxcvbnm,,./';
$ciphering = "aes-256-cbc";    
$options   = 0;
$iv        = '4673645287364829';
$key       = "KianNaquines";

/*
    Encryption Algorithm function
*/ 
function encryption($string,$method,$key,$options,$iv){
    $process_encryption = openssl_encrypt($string,$method,$key,$options,$iv);

    return $process_encryption;
}

$encrypted_data = encryption($simple_string,$ciphering,$key,$options,$iv);

/*
    Decryption Algorithm function
*/ 
function decryption($hashed,$method,$key,$options,$iv){
    $process_decryption = openssl_decrypt($hashed,$method,$key,$options,$iv);

    return $process_decryption;
}

$decrypted_data = decryption($encrypted_data,$ciphering,$key,$options,$iv);




    
?>




