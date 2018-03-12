<?php

class LoginController extends Controller{

    protected $userObject;
    
    
   public function do_login() {
	   // handles login
       $this->userObject = new Users();
       
       if($this->userObject->checkUser($_POST['email'], $_POST['password'])) {
//          echo "good user"; 
           
           $userinfo = $this->userObject->getUserFromEmail($_POST['email']);
           
           $_SESSION['uID'] = $userinfo['uID'];

           header('Location: '.BASE_URL);
           
       } else {
           $this->set('error','Wrong password / email combination');
       }
       
   }
	
}