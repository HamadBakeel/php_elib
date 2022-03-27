<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        $this->view('home');
    }

    function index(){

//        $this->view("index");

    }

}
?>