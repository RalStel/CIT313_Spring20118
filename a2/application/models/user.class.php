<?php

class User extends Model {


    function __construct() {
        parent::__construct();
    }

    function __get($variablename) {
        return $this->$variablename;
    }

    function __set($variablename, $variablevalue) {
        $this->$variablename = $variablevalue;
    }

    function __destruct() {
        
    }

    function getName() {
        
        return array(
            //array for the user values
            'userID' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
            
        );

    }
}

?>