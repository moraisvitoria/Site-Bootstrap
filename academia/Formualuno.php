<?php
    require_once 'head.php';
?>

<form>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Seu nome">    
                </div>
            </div>           

            <div class="col-md-2">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
                </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                 <label for="sexo">Sexo</label><p>
                  <input type="radio" name="optradio" checked> Feminino           
                  <input type="radio" name="optradio"> Masculino
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3">        
              <div class="form-group">            
                  <label for="dn">Data de Nascimento</label>
                  <input type="date" class="form-control">
              </div>
           </div>

            <div class="col-md-3">        
                <div class="form-group">            
                    <label for="cpf">Cpf</label>
                    <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                </div>
            </div>



        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                <label for="rg">RG</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" class="form-control" onblur="pesquisacep(this.value);">
              </div>
            </div>
            <div>

            <div class="col-md-3">
                <div class="form-group">
                <label for="endere??o">endere??o</label>
                <input type="text" class="form-control"
                id="Rua" name="rua">
              </div>
            </div>
            
            </div>

        
          <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                <label for="N??mero">N??mero</label>
                <input type="text" class="form-control">
              </div>
            </div>

            </div>

<div class="col-md-2">
    <div class="form-group">
    <label for="complemento">Complemento</label>
    <input type="text" class="form-control">
  </div>
</div>
</div>

<div class="col-md-2">
    <div class="form-group">
    <label for="Bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro">
   
  </div>
</div>
</div>

</div>
<div class= "row">
<div class="col-md-2">
    <div class="form-group">
    <label for="Cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade">
  </div>

  </div>

<div class="col-md-3">
    <div class="form-group">
    <label for="Estado">Estado</label>
    <input type="text" class="form-control" id="uf">
  </div>
</div>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endere??o de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ningu??m.</small>
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>



<?php
    require_once 'rodape.php';
?>     



                



                