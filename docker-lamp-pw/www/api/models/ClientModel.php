<?php
Class ClientModel{
    var $Connection;
    public function __construct(){
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass -> openConnect();
        $this -> Connection = $ConnectClass -> getConn();

    }
    public function listClients(){
        $sql = 'SELECT * from clients';
        return $this -> Connection -> query($sql);
    }
    public function consultClient($idClient){
        $sql = "
            SELECT * FROM clients
            WHERE
            idClient = $idClient
        ";
        return $this -> Connection -> query($sql);
    }
    public function insertClient($client){
        $sql ="
            INSERT INTO
                clients (name, phone, email, address)
            VALUES(
                '{$client['name']}',
                '{$client['phone']}',
                '{$client['email']}',
                '{$client['address']}'
            )
        ";
        
        return $this -> Connection -> query($sql);
    }
    public function updateClient($client, $arrayClient){
        $sql ="
            UPDATE
                clients
            SET
                name='{$arrayClient['name']}',
                email='{$arrayClient['email']}',
                phone='{$arrayClient['phone']}',
                address='{$arrayClient['address']}'
            WHERE
                idClient = {$idClient}       
        ";
        return $this -> Connection -> query($sql);

    }
    public function deleteClient($idClient){
        $sql = "
            DELETE FROM 
                clients 
            WHERE 
                idClient = $idClient
        ";
        return $this -> Connection -> query($sql);
    }
}
?>