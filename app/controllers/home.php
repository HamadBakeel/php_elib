<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        $this->view('register');
    }

    function index(){

//        $this->view("index");

    }

}
?>