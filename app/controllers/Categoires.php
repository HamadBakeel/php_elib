<?php
require_once 'controller.php';

class Categories extends Controller
{
    public function __construct()
    {
        $this->view('categories');
    }
}