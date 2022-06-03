<?php
class tarea{
    function select($id,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
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
    function create($desc,$id,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/projects/'.$id.'/tasks'; 
        $data = array(
            'description' => $desc
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
    
    function delete($idt,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/tasks/'.$idt; 
        
        $ch = curl_init();
        
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1
        );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
        
        curl_setopt_array($ch,$options);
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        return $result;
    
    }
    function update($idt,$finished,$desc,$auth){
        $url='https://adonisings.herokuapp.com/api/v1/tasks/'.$idt; 
        $data = array(
            'description' => $desc,
            'finished' => $finished
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
$tarea=new tarea;

?>