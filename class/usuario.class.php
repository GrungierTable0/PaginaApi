<?php
class usuario{
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
        
        $respond = json_decode($result);
        return $respond;
    }
    
    
    function update($email,$emailnew,$password,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/users/'.$email;
        $data = array(
            'email' => $emailnew,
            'password' => $password
        );
        
        $ch = curl_init();
        
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => 1
        );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
        curl_setopt_array($ch,$options);
        
        
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        $respond = json_decode($result);
        return $respond;
    }
    
    function delete($email,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/users/'.$email;
        $ch = curl_init();
            
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1
        );
        
            
        curl_setopt_array($ch,$options);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',$auth));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            
        
        $result = curl_exec($ch);
            
        curl_close($ch);
        return $result;
    
    }
}
$usuario = new usuario;


?>