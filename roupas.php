<?php
require_once 'head.php';
require_once 'menu.php';
?>


    <div class="container-fluid texto">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Coleção de Verão 2023</h1>
          </div>
        </div>
      </div>

    <div class="container-fluid imagens">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
             <img class="card-img-top" src="imagens/blusa-1.webp">
             <div class="card-body">
                <h2 class="card-text">Blusa Mullet</h2>
                <h3>R$ 55,90</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shirt-1">
                    Comprar
                  </button>
            </div>
        </div>
    </div>

         <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/roupa-2.webp">
              <div class="card-body">
                  <h2 class="card-text">Conjunto Desportivo</h2>
                  <h3>R$ 75,00</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shirt-2">
                    Comprar
                  </button>
              </div>
            </div>
          </div>

          <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="imagens/roupa-3.jpg">
                <div class="card-body">
                    <h2 class="card-text">Kit Short Verão</h2>
                    <h3>R$99,90</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shirt-3">
                    Comprar
                  </button>
                </div>
              </div>
            </div>

            <div class="col-md-3">
            <div class="card">
               <img class="card-img-top" src="imagens/roupa-4.webp">
                <div class="card-body">
                  <h2 class="card-text">Calça Legging High Unlimit</h2>
                  <h3>R$ 79,90</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shirt-4">
                    Comprar
                  </button>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="shirt-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Blusa Mullet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/blusa-1.webp">
        <p>Mochila em couro legítimo, com costuras reforçadas e alças anatômicas.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="shirt-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Desportivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/roupa-2.webp">
        <p> Este conjunto é confeccionado em suplex liso com detalhes em viés de cores contrastantes. Conforto, estilo e praticidade para você praticar atividade física.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="shirt-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kit Short Verão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/roupa-3.jpg">
        <p>Short super confortável, seu material principal é Poliéster.
           Temporada de lançamento: Primavera/Verão</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="shirt-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calça Legging</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/roupa-4.webp">
        <p>Calça legging energy poliamida preta com elástico colorido</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

   




 <?php
 require_once 'footer.php';
 ?>