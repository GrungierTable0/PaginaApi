<?php
function select($id,$auth){
    $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_USERPWD => $auth,
        CURLOPT_RETURNTRANSFER => 1
    );
    
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;

}
function create($desc,$id,$auth){
    $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
    $data = array(
        'description' => $desc
    );
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_USERPWD => $auth,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1
    );
    
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;
}

function delete($id,$auth){
    $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
    
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_USERPWD => $auth,
        CURLOPT_RETURNTRANSFER => 1
    );
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;

}
function update($id,$finished,$desc,$auth){
    $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
    $data = array(
        'description' => $desc,
        'description' => $finished
    );
    $ch = curl_init();
    
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_USERPWD => $auth,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => 1
    );
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    
    curl_setopt_array($ch,$options);
    
    $result = curl_exec($ch);
    
    curl_close($ch);
    return $result;
}

?>