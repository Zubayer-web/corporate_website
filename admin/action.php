<?php
    namespace App\classes;
    require_once '../vendor/autoload.php';   
    $user = new User();
    // register action
    if(isset($_POST['action']) && $_POST['action'] == 'register' ){
        $responsve = $user->register($_POST);
        if($responsve != true){            
            echo 'ok';
        }else{
            echo $responsve;
        }        
    }

    if( isset($_POST['action']) && $_POST['action'] == 'login' ){
        $responsve = $user->login($_POST);
        if( $responsve != true){
            echo 'ok';
        }else{
            echo $responsve; 
        }
    }


?>
