<?php

// Seller class

class Seller
{
    use Model;

    protected $table = 'sellers';

    public function addSeller($data){
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

    public function findSellerID($userID){
        $query = "
            SELECT NIC 
            from $this->table 
            WHERE user_id = $userID
            ";

        return $this->execute($query);
    }

}

