<?php

function login($email,$password){
    $url='https://adonisings.herokuapp.com/api/v1/users/login'; 
    $data = array(
        'email' => $email,
        'password' => $password
    
    );
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1
    );
    
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    
    $auth=$result; /*Quiero regresar el token pero de momento no he podido hacerlo */ 
    return $auth;

}

?>