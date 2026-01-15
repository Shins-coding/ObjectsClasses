<?php
class Customer {
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    public $accounts = [];  

    public function __construct($firstName, $lastName, $email, $phone) {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->email     = $email;
        $this->phone     = $phone;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    // *** THIS METHOD WAS MISSING ***
    public function addAccount(Account $account) {
        $this->accounts[] = $account;
    }
}
?>

