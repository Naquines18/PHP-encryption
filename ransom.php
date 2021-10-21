<?php
include "hash.php";

if(isset($_POST["key"])){
    $userkey = $_POST["key"];

    if($userkey != $key){
        echo "You key is invalid! HAHAHAHA";
    }else{
        $decrypted_data = decryption($encrypted_data,$ciphering,$userkey,$options,$iv);

        echo "The decrypted data is ".$decrypted_data;
        echo "<br>";
        echo "Your key is ".$userkey;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ransom Virus</title>
</head>
<body>
    <form method="post">
        <input type="text" name="key" id="key" placeholder="Enter Encryption Key to open your files">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <br><br><br>
    <h4>Encrypted Text</h4>

    <br>

    <?php
        if(isset($_POST["text"])){
            $usertext = $_POST["text"];
        
        
            $encrypted_text = encryption($usertext,$ciphering,$key,$options,$iv);
        
            echo "Your text is: ".$usertext;
            echo "<br>";
            echo "Your encrypted text is: ". $encrypted_text;
        
          
        }
    ?>
    <form method="post">
        <input type="text" name="text" id="text" placeholder="Enter your text that you want to encrypt">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>