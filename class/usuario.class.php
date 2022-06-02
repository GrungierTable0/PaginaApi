<?php
function create($email,$password){
    $data = array(
        'email' => $email,
        'password' => $password
    
    );
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => 'https://adonisings.herokuapp.com/api/v1/users/register/',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1
    );
    
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;
}


function update($email,$auth){
    $data = array(
        'email' => $email
    );
    $url='https://adonisings.herokuapp.com/api/v1/users/'.$email;
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_USERPWD => 
$auth,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1
    );
    
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;
}

function delete($email,$auth){
    $url='https://adonisings.herokuapp.com/api/v1/users/'.$email;
    $ch = curl_init();
        
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERPWD => $auth
    );

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        
    curl_setopt_array($ch,$options);
        
    $result = curl_exec($ch);
        
    curl_close($ch);
    return $result;

}

?>