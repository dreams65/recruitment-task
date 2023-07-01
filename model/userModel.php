<?php

class UserModel {
    private $jsonFile = './dataset/users.json';
    
    public function getUsers() {
        $users = file_get_contents($this->jsonFile);
        return json_decode($users, true);
    }
    
    public function addUser($newUser) {
        $users = $this->getUsers();
        $newUser['id'] = uniqid();
        $users[] = $newUser;
        file_put_contents($this->jsonFile, json_encode($users));
    }
    
    public function deleteUser($userId) {
        $users = $this->getUsers();
        
        $index = null;
        foreach ($users as $key => $user) {
            if ($user["id"] == $userId) {
                $index = $key;
                break;
            }
        }
        
        if ($index !== null) {
            unset($users[$index]);
            $users = array_values($users);
            file_put_contents($this->jsonFile, json_encode($users));
        }
    }
}
