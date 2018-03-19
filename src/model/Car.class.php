<?php

/**
 * @author: nick_cai
 * @date: 2018/3/16
 */
class CCar
{

    private $pdo;

    //table name
    const TABLE_CARD = 'card';

    //table field
    const CARD_ID = 'id';
    const CARD_BRAND = 'brand';
    const CARD_NAME = 'name';
    const CARD_CATEGORY = 'category';
    const CARD_FULETYPE = 'fuelType';
    const CARD_IMAGE = 'image';
    const CARD_STATE = 'state';
    const CARD_CITY = 'city';
    const CARD_AREA = 'area';
    const CARD_PRICE = 'price';
    const CARD_DESCRIPTION = 'description';
    const CARD_STATUS = 'status';                   //1:normal; 2:discontinued; 3:others
    const CARD_CTIME = 'createTime';
    const CARD_ETIME = 'editTime';


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
    public function addCard($param = array())
    {
        if (!sizeof($param)) {
            return false;
        }

        try {
            $data = array();
            $data[self::CARD_BRAND] = $param[self::CARD_BRAND];
            $data[self::CARD_NAME] = $param[self::CARD_NAME];
            $data[self::CARD_CATEGORY] = $param[self::CARD_CATEGORY];
            $data[self::CARD_FULETYPE] = $param[self::CARD_FULETYPE];
            $data[self::CARD_IMAGE] = $param[self::CARD_IMAGE];
            $data[self::CARD_STATE] = $param[self::CARD_STATE];
            $data[self::CARD_CITY] = $param[self::CARD_CITY];
            $data[self::CARD_AREA] = $param[self::CARD_AREA];
            $data[self::CARD_PRICE] = $param[self::CARD_PRICE];
            $data[self::CARD_DESCRIPTION] = $param[self::CARD_DESCRIPTION];
            $data[self::CARD_STATUS] = 1;
            $data[self::CARD_CTIME] = time();
            $data[self::CARD_ETIME] = time();
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
     *get card by id
     */
    public function getCardById($id)
    {

    }

    /**
     *get card list
     */
    public function getCardList($where)
    {

    }

    /**
     *edit card by id
     */
    public function editCardById($id)
    {

    }

    /**
     *edit cards
     */
    public function editCards($where)
    {

    }

    /**
     *delete card by id
     */
    public function deleteCardById($id)
    {

    }

    /**
     *delete cards
     */
    public function deleteCards($where)
    {

    }

}