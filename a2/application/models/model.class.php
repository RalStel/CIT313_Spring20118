<?php

abstract class Model {

    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    public function __construct() {
        // we are revisiting this later
    }

    function __get($variablename) {
        return $this->$variablename;
    }

    function __set($variablename, $variablevalue) {
        $this->$variablename = $variablevalue;
    }

    function __destruct() {
        
    }
}

?>