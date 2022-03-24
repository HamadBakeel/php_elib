<?php
require_once 'controller.php';
class Cart extends Controller
{
    public function __construct()
    {
        $this->view('cart');
    }
}