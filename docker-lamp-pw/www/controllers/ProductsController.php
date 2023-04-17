<?php
    class ProductsController{
        public function listProducts(){
            require_once("models/ProductsModel.php");
            $productsModel=new ProductsModel();
            $result = $productsModel -> listProducts();
            $arrayProducts= array();
            while ($product=$result -> fetch_assoc()) {
                array_push($arrayProducts, $product);
            }
            require_once('views/templates/header.php');
            require_once('views/client/listProducts.php');
            require_once('views/templates/footer.php');
        }
        

    }
    

?>