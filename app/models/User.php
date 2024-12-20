<?php

// User class

class User 
{
    use Model;

    protected $table = 'users';
    protected $allowedColumns = [
        'role'
    ];

    public function addUser($data){
        $name = $data['user_name'];
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['user_type'];

        $query = "
            INSERT INTO $this->table (user_name, email, password, role)
            VALUES ('$name', '$email', '$password', '$role')
        ";

        $this->execute($query);
    }

    public function findUser($data){
        $email = $data['email'];
        $password = $data['password'];
        $role = 'Farmer';

        $query = "
            SELECT * FROM $this->table
            WHERE email = '$email' AND password = '$password'
        ";

        echo "<script>console.log('findUser Query:".$query."')</script>";

        return $this->execute($query);
    }

    public function updateStatus($userID) {
        $query = "
            UPDATE $this->table SET status = 1 WHERE user_id = $userID
        ";

        return $this->execute($query);
    }

}
