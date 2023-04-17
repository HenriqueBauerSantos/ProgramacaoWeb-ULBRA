<?php
    ini_set('display_errors',1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    if(!isset($_GET['controller'])){
        require_once('controllers/SiteController.php');
        $SiteController = new SiteController();
        $SiteController -> home();  
    }
    else {
        switch ($_REQUEST['controller']) {
            case 'site':
                require_once('controllers/SiteController.php');
                $SiteController = new SiteController();
                if (!isset($_GET['action'])) {
                    $SiteController -> home(); 
                }
                else {
                    switch ($_REQUEST['action']) {
                        case 'home':
                            $SiteController -> home();
                        break;
                        case 'about':
                            $SiteController -> about();
                        break;
                        case 'products':
                            $SiteController -> products();
                        break;
                        case 'contact':
                            $SiteController -> contact();
                        break;
                        case 'login':
                            $SiteController -> login();
                        break;
                    }
                }
            break;
            case 'client':
                require_once('controllers/ClientController.php');
                $ClientController = new ClientController();
                if (!isset($_GET['action'])) {
                    //ação init
                }
                else {
                    switch ($_REQUEST['action']) {
                        case 'register':
                            $ClientController -> register();
                        break;
                        case 'registerView':
                            $ClientController -> registerView();
                        break;
                        case 'listClients':
                            $ClientController -> listClients();
                        break;
                        
                    }
                }
            break;
            case 'products':
                require_once('controllers/ProductsController.php');
                $ProductsController = new ProductsController();
                if (!isset($_GET['action'])) {
                    //ação init
                }
                else {
                    switch ($_REQUEST['action']) {
                        case 'listProducts':
                            $ProductsController -> listProducts();
                        break;
                        
                    }
                }
            break;
        }
}