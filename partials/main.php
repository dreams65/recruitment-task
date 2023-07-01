<?php

require_once './model/UserModel.php';

$userModel = new UserModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["del"])) {
        $userId = $_POST["del"];

        $userModel->deleteUser($userId);
    } else if (isset($_POST["add"])) {
        $newUser = array(
            "name" => $_POST["name"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "address" => array(
                "street" => $_POST["address"],
                "suite" => "",
                "city" => "",
                "zipcode" => "",
                "geo" => array(
                "lat" => "",
                "lng" => "",
                )
            ),
            "phone" => $_POST["phone"],
            "company" => array(
                "name" => $_POST["company"],
                "catchPhrase" => "",
                "bs" => "",
            ),
        );
        
        $userModel->addUser($newUser);
    }
}

$users = $userModel->getUsers();

require_once 'view/userView.php';
