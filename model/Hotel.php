<?php

/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/12/2017
 * Time: 9:00 PM
 */
class Hotel
{
        private $hotel_id;
        private $hotel_name;
        private $address;
        private $contact;
        private $date_and_time;


        public function _construct() {

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
     * @param mixed $hotel_name
     */
    public function setHotelName($hotel_name)
    {
        $this->hotel_name = $hotel_name;
    }

    /**
     * @return mixed
     */
    public function getHotelName()
    {
        return $this->hotel_name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $date_and_time
     */
    public function setDateAndTime($date_and_time)
    {
        $this->date_and_time = $date_and_time;
    }

    /**
     * @return mixed
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }
}