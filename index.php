<?php

    class User{
      public $Nome;
      public $Cognome;
      public $Data_di_nascita;
      public $Paese;

      public function  __construct($Nome, $Cognome, $Data_di_nascita, $Paese) {
        $this -> Nome  = $Nome;
        $this -> Cognome  = $Cognome;
        $this -> Data_di_nascita  = $Data_di_nascita;
        $this -> Paese  = $Paese;
      }
      public function __toString(){
        return "#User <br> Nome : " . $this-> Nome . "<br> Cognome : " . $this -> Cognome . "<br> Data di nascita : " . $this -> Data_di_nascita . "<br> Paese : " . $this -> Paese;
      }
    }

    $user1 = new User("Enrico","Sella Nora ","17/11/1996","Italy");
    $user2 = new User("Paolo","Marcucci","12/10/1995","Italy");

    echo $user1;
    echo "<br><br><br><br>";
    echo $user2;
