<?php
   namespace App\classes;

   use App\classes\Db;
use mysqli;

   class User {

       // Register function      
       public function register($data) {
           $fullName = $data['fullname'];
           $useremail = $data['useremail'];
           $password = password_hash($data['password'], PASSWORD_DEFAULT);     
           $output = "";     
           $db = new Db();
           $sql = "SELECT * FROM `admin_user` WHERE `email` = '$useremail'";
           $result =  mysqli_query( $db->db_con(), $sql );
            if(mysqli_num_rows($result) <= 1 ){
                $sql = "INSERT INTO `admin_user`(`fullname`, `email`, `passowrd`) VALUES ('$fullName','$useremail','$password')";
                mysqli_query( $db->db_con(), $sql );
            }else{
               $output = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Opps! </strong> Your email already exgist.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                return $output;
            }           
       }
    
    // Login function
    public function login($data){
        $loginEmail = $data['useremail'];
        $loginpassword = $data['password'];
        $revember = isset($data['remember']) ? 1 : 0;         
        $db = new Db();
        $sql = "SELECT `fullname`, `email`, `passowrd`, `status` FROM `admin_user` WHERE `email` = '$loginEmail'";
        $result = mysqli_query( $db->db_con(), $sql );

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);   
            if($revember == 1){
                setcookie('useremail', $loginEmail, time()+( 30 * 24 * 60 * 60 ));
                setcookie('password', $loginpassword, time()+( 30 * 24 * 60 * 60 ));
            }else{
                setcookie('useremail', '', -time()+( 30 * 24 * 60 * 60 ));
                setcookie('password', '', -time()+( 30 * 24 * 60 * 60 ));
            }         
            if(password_verify($loginpassword, $row['passowrd'])){
                if($row['status'] == 1){
                    session_Start();
                    $_SESSION['name'] = $row['fullname'];
                    $_SESSION['email'] = $row['email']; 
                }else{
                    $output = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Opps! </strong> Your account not active right now.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    return $output;
                }
                }else{
                    $output = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Opps! </strong> Your password is worng.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    return $output;
                }
                }else{
                        $output = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Opps! </strong> your cadination is do not have.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                        return $output;
                }
    }

    public function logincheck(){
        session_start();        
       return isset($_SESSION['email']) ? true : false;
    }
   }