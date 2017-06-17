<?php

/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/12/2017
 * Time: 9:06 PM
 */
class Rooms
{

    private $room_id;
    private $size;
    private $no_of_rooms;
    private $price;
    private $location;
    private $features;
    private $hotel_id;
    private $customer_id;


    public function _construct(){

    }

    /**
     * @param mixed $room_id
     */
    public function setRoomId($room_id)
    {
        $this->room_id = $room_id;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $no_of_rooms
     */
    public function setNoOfRooms($no_of_rooms)
    {
        $this->no_of_rooms = $no_of_rooms;
    }

    /**
     * @return mixed
     */
    public function getNoOfRooms()
    {
        return $this->no_of_rooms;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param mixed $hotel_id
     */
    public function setHotelId($hotel_id)
    {
        $this->hotel_id = $hotel_id;
    }

    /**
     * @return mixed
     */
    public function getHotelId()
    {
        return $this->hotel_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

}