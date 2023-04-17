<?php

namespace App\Controllers\Admin;

use App\Models\ClientModel;
use App\Controllers\BaseController;
class Client extends BaseController{

    public function listClients(){
        $ClientModel = new ClientModel();
        $data= [
            'arrayClients' => $ClientModel->findall()
        ];
        echo view('admin/templates/header');
        echo view('admin/client/listClients',$data);
        echo view('admin/templates/footer');
    }
    public function insertClient(){
        echo view('admin/templates/header');
        echo view('admin/client/insertClient');
        echo view('admin/templates/footer');
    }
    public function insertClientAction(){   
        $data = array(
            'name' => $this -> request -> getVar('name'),
            'phone' => $this -> request -> getVar('phone'),
            'email' => $this -> request -> getVar('email'),
            'address' => $this -> request -> getVar('address')
        );
        $ClientModel = new ClientModel();

        $ClientModel -> insert($data);
        
        // if(isset($_FILES["photo"]) && $_FILES['photo']['name']!=''){
        //     $this -> savePhoto($idClient);
        // };
        
        return redirect()->to(base_url('admin/listClients'));
    } 
    public function updateClient($idClient){
        $ClientModel = new ClientModel();
        $data = [
            'arrayClient' => $ClientModel -> find($idClient)
        ];
        echo view('admin/templates/header');
        echo view('admin/client/updateClient',$data);
        echo view('admin/templates/footer');
    }
    public function updateClientAction($idClient){   
        $data = array(
            'name' => $this -> request -> getVar('name'),
            'phone' => $this -> request -> getVar('phone'),
            'email' => $this -> request -> getVar('email'),
            'address' => $this -> request -> getVar('address')
        );
        $ClientModel = new ClientModel();
        $ClientModel -> update($idClient, $data);   
        // if(isset($_FILES["photo"]) && $_FILES['photo']['name']!=''){
        //     $this -> savePhoto($idClient);
        // };  
        return redirect()->to(base_url('admin/listClients'));
    }
    public function deleteClient($idClient){
        $ClientModel = new ClientModel();
        $ClientModel -> delete($idClient);   
        return redirect()->to(base_url('admin/listClients'));
    }
}