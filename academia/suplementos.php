<?php
  require_once 'head.php';
  require_once 'menu.php';
?>  

 <div class="container-fluid conteudo">
    <div class="row">
         <div class="col-md-12 text-center">
             <h1>Fitness</h1>
        </div>
    </div>
 </div>

 <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="imagens/whey.jpg">
                    <div class="card-body">
                        <h3 class="card-text">Whey</h3>
                        <h4>R$250,00</h4>
                        <!-- Botão para acionar modal -->
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#um">
                       Comprar
                      </button>
            </div>
        </div> 
    </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/suplemento3.jpg">
                <div class="card-body">
                <h3 class="card-text">BCAA</h3>
                <h4>R$ 220,00</h4>
                        <!-- Botão para acionar modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dois">
                Comprar
                </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                    <img class="card-img-top" src="imagens/suplementos4.jpg">
                    <div class="card-body">
                    <h3 class="card-text">Whey</h3>
                    <h4>R$ 310,00</h4>
                        <!-- Botão para acionar modal -->
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tres">
                   Comprar
                   </button>
                    </div>
            </div>
        </div>

         <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="imagens/suplemento3.jpg">
                    <div class="card-body">
                    <h3 class="card-text">suplemento new</h3>
                        <h4>R$ 410,00</h4>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Mayra">
                        Comprar
                        </button>
                         </div>
                </div>
            </div>



 
 








<!-- Modal -->
<div class="modal fade" id="whey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="whey" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        ...
        <img class="card-img-fluid" src="imagens/mochila1.jpg">
        <p> produto de qualidade.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicioanar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Raissa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="mochila Raissa" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        ...
        <img class="card-img-fluid" src="imagens/mochila2.jpg">
        <p>Mochila de couro, Moderna , Bem estruturada.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicioanar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Mayra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="mochila Mayra" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        ...
        <img class="card-img-fluid" src="imagens/mochila3.jpg">
        <p>Mochila de Napa, confortável , Bem estruturada.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicioanar ao carrinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Academia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="mochila Academia" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        ...
        <img class="card-img-fluid" src="imagens/mochila4.jpg">
        <p>Mochila de Napa, pratica para passear, Bem estruturada.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicioanar ao carrinho</button>
      </div>
    </div>
  </div>
</div>
    
    
<?php
require_once 'footer.php';
?>







