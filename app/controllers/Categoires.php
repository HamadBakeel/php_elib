<?php
require_once 'controller.php';

class Categoires extends Controller
{
    public function __construct()
    {
        $this->view('categories');
    }
}