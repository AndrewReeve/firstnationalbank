<?php
/**
 * Internet Programming - Assignment 2
 * Author: Andrew Reeve, 14075224
 * Author: Jasper Ballantyne, 13115419
 * Author: Ian Chan, 13103607
 * Date: 21/09/2016
 *
 * a2.php controls the main flow of the first national bank website. This includes Users logging in and registering, and passing off
 * flow of control to supporting files such as Account.php
 */

// include "user.php";
// include "account.php";
// include "transaction.php";

$users = array(); // An Array of User Objects

$con = new mysqli("localhost", "a2", "a2");
if ($con->connect_error) {
    die ("Connection Failed : " . $con->connect_error);
}


