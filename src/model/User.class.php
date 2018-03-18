<?php

/**
 * @author: nick_cai
 * @date: 2018/3/16
 */
class CUser
{

    private $pdo;

    //table name
    const TABLE_USER = 'user';

    //table field
    const USER_ID = 'id';
    const USER_USERNAME = 'username';
    const USER_PASSWORD = 'password';
    const USER_NAME = 'name';
    const USER_CITY = 'city';
    const USER_ADDRESS = 'address';
    const USER_MOBILE = 'mobile';
    const USER_EMAIL = 'email';
    const USER_GENDER = 'gender';
    const USER_ROLE = 'role';                   //1:customer; 2:seller; 3:admin
    const USER_CTIME = 'createTime';
    const USER_ETIME = 'editTime';


    public function __construct()
    {

        // connect with db
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=testdb', 'account', 'password');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    /**
     * add card
     */
    public function addUser($param = array())
    {
        if (!sizeof($param)) {
            return false;
        }

        try {
            $data = array();
            $data[self::USER_USERNAME] = $param[self::USER_USERNAME];
            $data[self::USER_PASSWORD] = $param[self::USER_PASSWORD];
            $data[self::USER_NAME] = $param[self::USER_NAME];
            $data[self::USER_CITY] = $param[self::USER_CITY];
            $data[self::USER_ADDRESS] = $param[self::USER_ADDRESS];
            $data[self::USER_MOBILE] = $param[self::USER_MOBILE];
            $data[self::USER_EMAIL] = $param[self::USER_EMAIL];
            $data[self::USER_GENDER] = $param[self::USER_GENDER];
            $data[self::USER_ROLE] = $param[self::USER_ROLE];
            $data[self::USER_CTIME] = time();
            $data[self::USER_ETIME] = time();
            $ret = $this->pdo->exec("insert into self::TABLE_NAME(...) values(...)");
            $id = $this->pdo->lastinsertid();
            if ($ret == false) {
                return false;
            } else {
                return $id;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     *get user info by username
     */
    public function getUserById($username)
    {


    }

    /**
     *get user list
     */
    public function getUserList()
    {

    }

    /**
     *edit user by id
     */
    public function editUserById()
    {

    }

}