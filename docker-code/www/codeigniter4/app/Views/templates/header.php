<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
    <header class="p-5 bg-primary text-white text-center">
        <h1>City Gallery</h1>
    </header>
    <section class="container-fluid">
        <div class="row">
            <menu class="col-md-2 ">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a id="menuHome" class="nav-link" href="<?=base_url('home')?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a id="menuSobre" class="nav-link" href="<?=base_url('about')?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                      <a id="menuProtudos" class="nav-link" href="<?=base_url('products')?>">Produtos e serviços</a>
                    </li>
                    <li class="nav-item">
                      <a id="menuContato" class="nav-link" href="<?=base_url('contact')?>">Contato</a>
                    </li>
                  </ul>
                  <h2>Clientes</h2>
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a id="menuHome" class="nav-link" href="<?=base_url('listClients')?>">Lista clientes</a>
                    </li>

                  </ul>
            </menu>
            <article class="col-md-10">
            
