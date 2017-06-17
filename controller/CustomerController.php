<?php
include_once ("../database/Database.php");
include_once ("../model/Customer.php");
/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/14/2017
 * Time: 8:06 AM
 */
class CustomerController extends Database {
    public function CustomerController () {
        parent::Database();
    }

    public function register(Customer $c) {
        $res = 0;
        $sql = "insert into customer(`customer_id`, `first_name`, `last_name`, `username`, `contact`, `address`, `number_of_person`, `password`) values(null, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $stm = $this -> getConnection() -> prepare($sql);

            //$customer_id = $c -> getCustomerId();
            $first_name = $c -> getFirstName();
            $last_name = $c -> getLastName();
            $username = $c -> getUsername();
            $contact = $c -> getContact();
            $address = $c -> getAddress();
            $number_of_person = $c -> getNoOfPerson();
            $password = $c -> getPassword();

            $stm -> bind_param("sssssis", $first_name, $last_name, $username, $contact, $address, $number_of_person, $password);
            $this -> $res = $stm -> execute();

        } catch (SQLiteException $e) {
            echo $e;
        }

        return $this -> $res;
    }


}