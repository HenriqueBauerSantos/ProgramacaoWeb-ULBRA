<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Client extends BaseController{

    public function listClients(){
        $ClientModel = new ClientModel();
        $data= [
            'arrayClients' => $ClientModel->findall()
        ];
        //var_dump($ClientModel->findall());
        echo view('templates/header');
        echo view('client/listClients',$data);
        echo view('templates/footer');
    }
    
}