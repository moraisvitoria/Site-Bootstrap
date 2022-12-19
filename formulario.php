<?php
require_once 'head.php';
?>

<form>
  <div class="container-fluid">
    <div class="form-row">
     <div class="col-md-4 mb-3">
      <label for="validationServer01">Nome</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nome" value="vazio" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    
    <div class="form-group">
       <label for="telefone">Telefone</label>
       <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
    </div>
  </div>
    

    <div class="row">
        <div class="col-md-4">
          <div class="form-grupo">
            <label for="dn">Data de Nascimento</label>
            <input type="date" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-grupo">
            <label for="sexo">Sexo</label>
            <p><input type="radio">Feminino
            <input type="radio">Masculino</p>
        </div>
       </div>
    </div>


        <div class="form-group">
          <div class="col-md-4">
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" \
			   pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \
			   title="Digite um CPF no formato: xxx.xxx.xxx-xx">
		    <input type="submit" value="Verificar">
          </div>
        </div>

    <div class="col-md-3 mb-3">
      <label for="validationServer05">CEP</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="CEP" required>
      <div class="invalid-feedback">
        Por favor, informe um CEP válido.
      </div>
    </div>

  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Cidade</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cidade" required>
      <div class="invalid-feedback">
        Por favor, informe uma cidade válida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Estado</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Estado" required>
      <div class="invalid-feedback">
        Por favor, informe um estado válido.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>