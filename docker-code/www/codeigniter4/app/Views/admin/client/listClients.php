<h1>Listagem de clientes</h1>
<table class="table table-striped">
    <tr>
        <th>Id do cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Foto</th>
        <th colspan="3" >Ações</th>
    </tr>

    <?php
        foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
            <td>
                <?php
                    if (is_file("assets/img/client/{$client['idClient']}.jpg")) {
                        echo "<img class='img-fluid' src= 'assets/img/client/{$client['idClient']}.jpg'>";
                    }
                    else {
                        echo 'Sem foto';
                    }
                ?>
            </td>
            <td>
                <a href="<?= base_url('admin/updateClient/'.$client['idClient'])?>">
                    Alterar
                </a>
            </td>
            <td >
                <a href="<?= base_url('admin/deleteClient/'.$client['idClient'])?>">
                    Deletar
                </a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>   