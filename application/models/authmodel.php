<?php
class AuthModel extends CI_Model{
    public function signin($email, $password){
        return RestApi::call(
            RestApiMethod::POST,
            "login",
            [
                'email' => $email, 
                'password' => $password, 

            ]
        );
    }
}