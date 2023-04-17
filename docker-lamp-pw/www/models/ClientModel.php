<?php

Class ClientModel{
    public function listClients(){
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass -> openConnect();
        $Connection = $ConnectClass -> getConn();

        $sql = 'SELECT * from clients';
        return $Connection -> query($sql);
    }
}
?>