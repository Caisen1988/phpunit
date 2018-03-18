<?php
require_once "../model/User.class.php";

Class MyController
{
    protected $uid;
    protected $userInfo;

    public function __construct()
    {
        $this->userInfo = new CUser();

    }

    private function init()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userInfo = $this->userInfo->getUserById($username);

        if ($password === $userInfo['password']) {
            $this->uid = $userInfo['id'];
        } else {
            return 'login error';
        }

    }

}