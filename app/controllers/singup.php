<?php

Class Singup extends Controller
{
    public function index()
    {
        $data["page title"] = "Sing Up";
        $this->view("singup", $data);
        
    }
}