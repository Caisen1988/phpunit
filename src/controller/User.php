<?php
require_once "../model/User.class.php";

Class User extends  MyController
{
    public $user;

    public function __construct()
    {
        $this->user = new CUser();
    }

    //add user's profile api
    public function addProfile($metoh, $id)
    {


    }

    //get user's profile api
    public function getProfile($metoh, $id)
    {


    }

    //update user's profile api
    public function updateProfile($metoh, $id)
    {


    }


}