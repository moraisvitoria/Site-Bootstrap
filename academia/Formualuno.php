<?php
 require_once 'head.php';
require_once 'menu.php';
?>

<div class="container_form">

        <h1>Formulário de Cadastro</h1>

         <form class="form" action="#" method="post">
                
                <div class="form_grupo">
                    <label for="nome" class="form_label">Nome</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                </div>

                <div class="form_grupo">
                    <label for="nome" class="form_label">sobrenome</label>
                    <input type="text" name="sobrenome" class="form_input" id="sobrenome" placeholder="Sobrenome" required>
                </div>

                <div class="form_grupo">
                    <label for="cpf" class="form_label">cpf</label>
                    <input type="text" cpf="cpf" class="form_input" id="cpf" placeholder="cpf" required>
                </div>

                </div>
                
                <div class="form_grupo">
                    <label for="e-mail" class="form_label">Email</label>
                    <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
                </div>

                </div>
                
                <div class="form_grupo">
                    <label for="datanascimento" class="form_label">Data de Nascimento</label>
                    <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
                </div>        

                <div class="form_grupo">

                    <span class="legenda">Sexo:</span>
                    
                    <div class="radio-btn">
                        <input type="radio" class="form_new_input" id="masculino" name="sexo" value="Masculino" required="required">
                        <label for="masculino" class="radio_label form_label"> <span class="radio_new_btn"></span> Masculino</label>
                    </div>

                    <div class="radio-btn">
                        <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino" required="required">
                        <label for="feminino" class="radio_label form_label"> <span class="radio_new_btn"></span> Feminino</label>
                    </div>

                       <div class="form-group">
                        <label for= "telefone"> telefone</label> 
                        <input type="text" class="form control" onpress="$('(00)00000-0000')">
                  </div>
        
<?php
require_once 'footer.php';
?>


