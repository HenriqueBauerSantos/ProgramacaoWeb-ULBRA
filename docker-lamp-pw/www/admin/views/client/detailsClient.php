<h1>Detalhes do cliente</h1>
<table>
    <tr>
        <th>Código do cliente</th>
        <td>
            <?=$arrayClient['idClient'] ?>
        </td>
    </tr>
    <tr>
        <th>Nome</th>
        <td>
            <?=$arrayClient['name'] ?>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>
            <?=$arrayClient['email'] ?>
        </td>
    </tr>
    <tr>
        <th>Telefone</th>
        <td>
            <?=$arrayClient['phone'] ?>
        </td>
    </tr>
    <tr>
        <th>Endereço</th>
        <td>
            <?=$arrayClient['address'] ?>
        </td>
    </tr>
    <tr>
        <th>Foto</th>
        <td>
                <?php
                    if (is_file("assets/img/client/{$arrayClient['idClient']}.jpg")) {
                        echo "<img class='img-fluid' src= 'assets/img/client/{$arrayClient['idClient']}.jpg'>";
                    }
                    else {
                        echo 'Sem foto';
                    }
                ?>
        </td>
    </tr>
</table>