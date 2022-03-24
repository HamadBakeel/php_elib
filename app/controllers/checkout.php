<?php
require_once 'controller.php';

class Checkout extends Controller
{
    public function __construct()
    {
        $this->view('checkout');
    }
}