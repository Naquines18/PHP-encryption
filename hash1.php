<?php
  
// Store a string into the variable which
// need to be Encrypted
$simple_string = "Welcome to GeeksforGeeks";
  
// Display the original string
echo "Original String: " . $simple_string . "\n";
  
// Store cipher method
$ciphering = "BF-CBC";
  
// Use OpenSSl encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Use random_bytes() function which gives
// randomly 16 digit values
$encryption_iv = random_bytes($iv_length);
  
// Alternatively, we can use any 16 digit
// characters or numeric for iv
$encryption_key = "HIWecaFjuDB5Pz0Qz2VzlsWRaiDlZbLQKftG211iIgE=";
  
// Encryption of string process starts
$encryption = openssl_encrypt($simple_string, $ciphering,
        $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "<br>";
echo "Encrypted String: " . $encryption . "\n";
  
// Decryption of string process starts
// Used random_bytes() which gives randomly
// 16 digit values
$decryption_iv = random_bytes($iv_length);
  
// Store the decryption key
$decryption_key = "HIWecaFjuDB5Pz0Qz2VzlsWRaiDlZbLQKftG211iIgE=";
  
// Descrypt the string
$decryption = openssl_decrypt ($encryption, $ciphering,
            $decryption_key, $options, $encryption_iv);
  
// Display the decrypted string
echo "<br>";

echo "Decrypted String: " . $decryption;
  
?>