<?php
class controller {
    
    public $load;
    public $model;
    
    function __construct() {
        $this->load = new Load();
        $this->model = new User();
        $this->home();
    }
    
    
    function home() {
        //sends the values to the model
        $this->model->userID = "RalStel";
        $this->model->firstname = "Raleigh";
        $this->model->lastname = "Stelle";
        $this->model->email = "rbstelle@iupui.edu";
        $this->model->role = "admin";
        //this line talks to the model
        $data = $this->model->getName();
        
        //this line talks to the view
        $this->load->view('view.php',$data);
    }
            
}
