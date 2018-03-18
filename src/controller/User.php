<?php
require_once "../model/User.class.php";

Class User extends  MyController
{
    public $user;

    public function __construct()
    {
        $this->user = new CUser();
    }

    //user profile api
    public function updateProfile($metoh, $id)
    {


    }


}