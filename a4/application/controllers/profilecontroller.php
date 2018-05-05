<?php

class ProfileController extends Controller {

    protected $userObject;

    public function index() {
        $userObject = new Users();
        $this->set('task', 'update');
    }

    public function update() {

        $this->userObject = new Users();

        if ($_POST['first_name'] == "") {
            $this->set('message', 'You must enter your first name.');
            $this->set('task', 'update');
        } elseif ($_POST['last_name'] == "") {
            $this->set('message', 'You must enter your last name.');
            $this->set('task', 'update');
        } elseif ($_POST['email'] == "") {
            $this->set('message', 'You must enter your email.');
            $this->set('task', 'update');
        } elseif ($_POST['password'] != "") {

            $password = $_POST['password'];
            if ($_POST['passwordtwo'] != $_POST['password']) {
                $this->set('message', 'password doesnt match.');
                $this->set('task', 'update');
            } else {
                $passhash = password_hash($password, PASSWORD_DEFAULT);
            }
        } else {
            $passhash = $_POST['currentpass'];
        }
        $data = array('first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'], 'email' => $_POST['email'], 'password' => $passhash);
        $this->userObject->updateUser($data);
        $this->set('message', 'Profile information updated!');
        $this->set('task', 'update');
    }

}

?>