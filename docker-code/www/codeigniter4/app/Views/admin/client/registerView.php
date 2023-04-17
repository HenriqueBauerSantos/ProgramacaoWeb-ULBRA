<h1>Dados do cadastro:</h1>
<table>
    <tr>
        <th>Nome</th>
        <td>
            <?= $arrayClient['name']?>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>
            <?= $arrayClient['email']?>
        </td>
    </tr>
    <tr>
        <th>Gênero:</th>
        <td>
            <?= $arrayClient['gender']?>
        </td>
    </tr>
    <tr>
        <th>Termos:</th>
        <td><?=$arrayClient['acceptView']?></td>
        <td><?=$arrayClient['promocoesView']?></td>
    </tr>
    <tr>
        <th>Escolaridade:</th>
        <td>
            <?=$arrayClient['school']?>
        </td>
    </tr>
    
</table>