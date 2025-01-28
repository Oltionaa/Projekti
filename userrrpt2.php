<?php

class Useri {
    private $id;              
    private $user_id;         
    private $user_name;       
    private $package_name;    
    private $price;           
    private $reservation_date;


    function __construct($id, $user_id, $user_name, $package_name, $price, $reservation_date) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->package_name = $package_name;
        $this->price = $price;
        $this->reservation_date = $reservation_date;
    }

   
    function getId() {
        return $this->id;
    }

    function getUser_Id() {
        return $this->user_id;
    }

    function getUser_Name() {
        return $this->user_name;
    }

    function getPackage_Name() {
        return $this->package_name;
    }

    function getPrice() {
        return $this->price;
    }

    function getReservationDate() {
        return $this->reservation_date;
    }

    function setUserName($user_name) {
        $this->user_name = $user_name;
    }

    function setPackageName($package_name) {
        $this->package_name = $package_name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setReservationDate($reservation_date) {
        $this->reservation_date = $reservation_date;
    }
}


?>

