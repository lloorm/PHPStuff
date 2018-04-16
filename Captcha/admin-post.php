<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['captcha']) && !empty($_POST['captcha'])){
        
        $captcha=$_POST['captcha'];
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfkJTYUAAAAAAAZz8IO6xjAJvIlZUZSkQvCWWVu&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        
        $obj = json_decode($response);
        
        // If the Google Recaptcha check was successful
        if($obj->success == true) {
            
            echo "Captcha correcto.";
        }
        else {
            echo "Captcha Incorrecto";
        }
    }
    
}
?>