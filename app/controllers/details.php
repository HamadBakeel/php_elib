<?php
require_once 'controller.php';

class Details extends Controller
{
    public function __construct()
    {
        $this->view('details');
    }
}
