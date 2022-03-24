<?php

class Validation
{

    public function __construct()
    {

    }

    public function lengthCheck($value){
    }
    public function userNameValidation($userName){

    }
    public function passwordValidation($password){
        if(strlen($password)<5 || strlen($password) > 20){

        }
        else{

        }

    }
    public function emailValidation($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        else{
            $emailErr = "good email format";
        }
    }
}