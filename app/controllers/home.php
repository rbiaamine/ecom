<?php

Class Home extends Controller
{
    public function index()
    {
        $data["page title"] = "HOME1";
        $this->view("index", $data);
        
    }
}