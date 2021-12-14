<?php

echo 'вроде все и работает но ниче не понятно....';



  $url = "https://cleaner.dadata.ru/api/v1/clean";
    
//$url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs";

  $token = "2681db664da356c397adbf4f45f58434789456ef";
  $secret = "21b4837bb0cd536c36459dc0b6b077aeb64d53b0";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Token " . $token,
            "X-Secret: " . $secret,
           
        ));

    $result = curl_exec($ch);
     curl_close($ch);
      
     echo '<pre>';
     print_r($result);
     echo '</pre>' 
        
       
    

   


/*$dadata = new Dadata($token, $secret);
$dadata->init();

// Стандартизовать ФИО
$result = $dadata->clean("name", $_POST['user_name']." ".$_POST['user_second_name']." ".$_POST['user_last_name']);
 '[ "москва сухонская 11" ]',
*/