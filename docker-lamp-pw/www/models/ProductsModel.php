<?php
    class ProductsModel{
        public function listProducts(){
            require_once('db/ConnectClass.php');
            $ConnectClass = new ConnectClass();
            $ConnectClass -> openConnect();
            $Connection = $ConnectClass -> getConn();
    
            $sql = 'SELECT * from products';
            return $Connection -> query($sql);
        }

    } 
?>