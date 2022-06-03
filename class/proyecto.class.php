<?php
class proyecto{
    function select($auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects'; 
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1
        );
        
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt_array($ch,$options);
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        
        $respond = json_decode($result);
        return $respond;
    
    }
    function create($name,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects'; 
        $data = array(
            'name' => $name
        );
        $ch = curl_init();
        
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => 1
        );
        
        curl_setopt_array($ch,$options);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
        
        $result = curl_exec($ch);
        curl_close($ch);
        $respond = json_decode($result);
        return $respond;
    }
    
    function delete($id,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id; 
        
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
    function update($id,$name,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id; 
        $data = array(
            'name' => $name
        );
        $ch = curl_init();
        
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => 1
        );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
        
        curl_setopt_array($ch,$options);
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        $respond = json_decode($result);
        return $respond;
    }
}
$proyecto = new proyecto;


?>