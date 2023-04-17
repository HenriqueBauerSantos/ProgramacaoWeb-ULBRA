<?php
    class ClientController{
        public function register(){
            require_once('views/templates/header.php');
            require_once('views/client/register.php');
            require_once('views/templates/footer.php');
        }
        public function registerView(){
            if (isset($_POST['accept'])) {
                $accept= true;
                $acceptView="Termo de uso do site aceito.";
            }
            else {
                $accept= false;
                $acceptView="Termo de uso do site não aceito.";
            }
            if (isset($_POST['promocoes'])) {
                $promocoes=true;
                $promocoesView="As promocoes serao enviadas para seu email.";
            }
            else {
                $promocoes=false;
                $promocoesView="As promocoes não serao enviadas.";
            }
            $arrayClient = array(
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'gender'=>$_POST['gender'],
                'accept'=>$accept,
                'acceptView'=>$acceptView,
                'promocoes'=>$promocoes,
                'promocoesView'=>$promocoesView,
                'school'=>$_POST['school']
            );

            require_once('views/templates/header.php');
            require_once('views/client/registerView.php');
            require_once('views/templates/footer.php');
        }
        public function listClients(){
            require_once("models/ClientModel.php");
            $clientModel=new ClientModel();
            $result = $clientModel -> listClients();

            $arrayClients= array();
            while ($client=$result -> fetch_assoc()) {
                array_push($arrayClients, $client);
            }
            require_once('views/templates/header.php');
            require_once('views/client/listClients.php');
            require_once('views/templates/footer.php');
        }
    }


?>