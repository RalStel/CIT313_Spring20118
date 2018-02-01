<?php

class admin extends user {

    protected $user_type = "2";

    function __construct($user_level, $user_id) {
        parent::__construct($user_level);
        $this->user_id = $user_id;
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