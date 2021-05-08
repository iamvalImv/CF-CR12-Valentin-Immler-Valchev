<?php

//Connect to DB
$conn = mysqli_connect('localhost', 'root', '', 'mount_everest_travel');
//Test DB Connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}

      class travel
    {
     
     private $id;
     private $destination;
     private $details;
     private $email;
     private $created_at;
     private $lat;
     private $lng;
    
    
    
     function setId($id) { $this->id = $id; }
     function getId() { return $this->id; }
     function setDestination($destination) { $this->destination = $destination; }
     function getDestination() { return $this->destination; }
     function setDetails($details) { $this->details = $details; }
     function getDetails() { return $this->details; }
     function setEmail($email) { $this->email = $email; }
     function getEmail() { return $this->email; }
     function setCreated_at($created_at) { $this->created_at = $created_at; }
     function getCreated_at() { return $this->created_at; }
     function setLat($lat) { $this->lat = $lat; }
     function getLat() { return $this->lat; }
     function setLng($lng) { $this->lng = $lng; }
     function getLng() { return $this->lng; }
     function set($) { $this-> = $; }
     function get() { return $this->; }
    

    

       public function_construct(argument){};
    

        //code

    

    };
?>