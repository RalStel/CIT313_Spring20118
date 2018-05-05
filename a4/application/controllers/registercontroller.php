<?php

class RegisterController extends Controller {

    protected $userObject;

    public function index() {
        $userObject = new Users();
        $this->set('task', 'add');
    }

    public function add() {

        $this->userObject = new Users();

        if ($_POST['first_name'] == "") {
            $this->set('message', 'You must enter your first name.');
                    $this->set('task', 'add');

        } elseif ($_POST['last_name'] == "") {
            $this->set('message', 'You must enter your last name.');
                    $this->set('task', 'add');

        } elseif ($_POST['email'] == "") {
            $this->set('message', 'You must enter your email.');
                    $this->set('task', 'add');

        } elseif ($_POST['password'] == "") {
            $this->set('message', 'You must enter your password.');
                    $this->set('task', 'add');

        } elseif ($_POST['passwordtwo'] == "") {
            $this->set('message', 'You must verify your password.');
                    $this->set('task', 'add');

        } else {
            $password = $_POST['password'];
            if ($_POST['passwordtwo'] != $_POST['password']) {
                $this->set('message', 'password doesnt match.');
            } else {
                $passhash = password_hash($password, PASSWORD_DEFAULT);
                $data = array('first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'], 'email' => $_POST['email'], 'password' => $passhash);
                $this->userObject->addUser($data);
                $this->set('message', 'Thanks for registering!');
            }
        }
    }

}

?>