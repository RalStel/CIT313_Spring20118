<?php

class user {

    protected $user_level;
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;

    public function __construct($user_level) {
        $this->user_level = $user_level;
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