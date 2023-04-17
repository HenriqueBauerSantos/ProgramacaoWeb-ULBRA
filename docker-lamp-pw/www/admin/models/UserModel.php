<?php

Class UserModel{
    public function consultUser($userName){
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass -> openConnect();
        $Connection = $ConnectClass -> getConn();

        $sql = "
                SELECT * from users
                WHERE
                    user= '$userName'
                ";
        return $Connection -> query($sql);
    }
}
?>