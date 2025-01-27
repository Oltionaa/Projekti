<?php

<<<<<<< HEAD
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

   
=======

class User {

    private $id;        
    private $user_id;       
    
    private $user_name;  
    private $package_name;  
    private $price;  

    private $reservation_date;  


    function __construct($id, $user_id, $user_name,$package_name,$price,$reservation_date) {
        $this->id = $id;              
        $this->name = $name;           
       
        $this->password = $password;   
    }
   
 
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
    function getId() {
        return $this->id;
    }

<<<<<<< HEAD
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
?
=======
  
    function getuser_id() {
        return $this->user_id;
    }


 
    function getuser_name() {
        return $this->user_name;
        
    }


    
    function getpackage_name() {
        return $this->package_name;
    }

    
    function getprice() {
        return $this->price;
    }



    function getreservation_date() {
        return $this->reservation_date;
    }
}






?>
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
