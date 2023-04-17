<h1>Cadastro de cliente</h1>
<form action="?controller=client&action=registerView" method="post">
    <div class="mt-2 mb-1">
        <label class="form-label" for="fname">Nome:</label>
        <input class="form-control" type="text" id="fname" name="name"><br>
    </div>
    <div class="mt-1 mb-1">
        <label class="form-label" for="lname">Email:</label>
        <input class="form-control" type="text" id="lname" name="email"><br><br>
    </div>
    <div class="form-group">
        <h4>Gênero:</h4>
        <div class="radio">
            <label><input type="radio" name="gender" value="Feminino"> Feminino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="Masculino"> Masculino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="Outro"> Outro</label>
        </div>
    </div>
    <div class="checkbox mt-3">
        <h4>Termos:</h4>
        <div>
            <label >
                <input type="checkbox" name="accept"> Aceito os termos de uso do site.
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="promo"> Desejo receber promoções por email.
            </label>
        </div>  
    </div>
    <div class="mt-1 mb-1">
        <h4>Escolaridade:</h4>
        <select class="form-select" name="school">
            <option value="fundamental">Fundamental completo</option>
            <option value="médio">Médio completo</option>
            <option value="superior">Superior completo</option>
        </select>
    </div>

    <button class="mt-3 mb-3" type="submit">Enviar</button>
</form>