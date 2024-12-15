<?php

// User class

class Vehicle
{
    use Model;

    protected $table = 'vehicles';
    
    public function addVehicle($vehicles) {
        foreach ($vehicles as $vehicleData) {
            $query = "
                INSERT INTO vehicles (type, registration_number, NIC) 
                VALUES (:type, :registration_number, :NIC)
            ";
            $this->execute($query, [
                'type' => $vehicleData['type'],
                'registration_number' => $vehicleData['registration'],
                'NIC' => $vehicleData['seller_NIC']
            ]);
        }
    }
    

}

