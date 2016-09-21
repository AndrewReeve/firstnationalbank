<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 21/09/2016
 * Time: 2:40 PM
 *
 * User Class to hold user information
 * Username, Password, First Name, Last Name, Email.
 */
class User
{
    private $strUsername;  // Username
    private $strPassword;  // Password
    private $strFirstName; // First Name
    private $strLastName;  // Last Name
    private $strEmail;     // Email

    public function User($inputUsername, $inputPassword, $inputFName, $inputLName, $inputEmail) {
        $this->strUsername = $inputUsername;
        $this->strPassword = $inputPassword;
        $this->strFirstName = $inputFName;
        $this->strLastName = $inputLName;
        $this->strEmail = $inputEmail;
        // debug
        echo "User created with username : " . $this->strUsername;
    }

    // Functions
    // checkPassword(string $inputPassword)
    // displayDetails?
    // createAccount() ????s
}