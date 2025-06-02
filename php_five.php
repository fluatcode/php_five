<?php
class User {
    public $username;
    public $password;

    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    function display_user() {
        echo "Username: " . $this->username . "<br>";
        echo "Password: " . $this->password;
    }
}

$user1 = new User("Joe", "mypass123");
$user1->display_user();
?>
