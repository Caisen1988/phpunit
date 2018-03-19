<?php
/**
 * @author: nick_cai
 * @date: 2018/3/16
 */
require_once "../model/Car.class.php";

class Car extends MyController
{
    protected $car;

    public function __construct()
    {
        $this->car = new CCar();
    }

    public function addCar()
    {

    }

    public function editCar()
    {

    }

    public function deleteCar()
    {

    }

    //search car buy condition
    public function searchCar()
    {

        $where = array();

        $result = $this->car->getCardList($where);

        return $result;
        
    }

}
