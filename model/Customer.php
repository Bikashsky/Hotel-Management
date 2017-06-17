<?php

/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/12/2017
 * Time: 9:01 AM
 */
class Customer
{
    private $customer_id;
    private $first_name;
    private $last_name;
    private $username;
    private $contact;
    private $address;
    private $no_of_person;
    private $password;

    public function _construct() {

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
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
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
     * @param mixed $no_of_person
     */
    public function setNoOfPerson($no_of_person)
    {
        $this->no_of_person = $no_of_person;
    }

    /**
     * @return mixed
     */
    public function getNoOfPerson()
    {
        return $this->no_of_person;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}