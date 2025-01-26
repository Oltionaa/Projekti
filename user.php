<?php


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
   
 
    function getId() {
        return $this->id;
    }

  
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
