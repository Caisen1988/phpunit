<?php

/**
 * @author: nick_cai
 * @date: 2018/3/16
 */
class COrder
{

    private $pdo;

    //table name
    const TABLE_ORDER = 'order';

    //table field
    const ORDER_ID = 'id';
    const ORDER_BRAND = 'customerId';
    const ORDER_NAME = 'sellerId';
    const ORDER_CATEGORY = 'carskuId';
    const ORDER_CTIME = 'createTime';
    const ORDER_ETIME = 'editTime';


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
     * add order
     */
    public function addOrder($param = array())
    {
        if (!sizeof($param)) {
            return false;
        }

        try {


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
     *get order by id
     */
    public function getOrderById($id)
    {

    }

    /**
     *get order list
     */
    public function getOrderList()
    {

    }

    /**
     *edit order by id
     */
    public function editOrderById($id)
    {

    }

    /**
     *edit orders
     */
    public function editOrders($where)
    {

    }

    /**
     *delete order by id
     */
    public function deleteOrderById($id)
    {

    }

    /**
     *delete orders
     */
    public function deleteOrders($where)
    {

    }

}