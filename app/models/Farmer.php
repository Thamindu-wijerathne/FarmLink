<?php

// User class

class Farmer
{
    use Model;

    protected $table = 'farmers';

    public function addFarmer($data){
        $nic = $data['nic'];
        $address = $data['address'];
        $telephone = $data['telephone'];
        $birthday = $data['birthday'];
        $about = $data['about'];
        $user_id = $data['user_id'];        
        
        $query = "
            INSERT INTO $this->table (NIC,address,telephone,birthday, about,user_id) 
            VALUES ('$nic', '$address', '$telephone', '$birthday', '$about', '$user_id')
        ";

        return $this->execute($query);
    }
}

