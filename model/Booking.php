<?php

/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/12/2017
 * Time: 9:13 PM
 */
class Booking
{

    private $booking_id;
    private $customer_id;
    private $date;

    public function _construct(){


    }

    /**
     * @param mixed $booking_id
     */
    public function setBookingId($booking_id)
    {
        $this->booking_id = $booking_id;
    }

    /**
     * @return mixed
     */
    public function getBookingId()
    {
        return $this->booking_id;
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

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

}