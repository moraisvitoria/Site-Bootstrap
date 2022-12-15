<?php
require_once 'head.php';
require_once 'menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center tela">
                <h1>Coleção 2023</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
             <img class="card-img-top" src="imagens/mochila1.webp">
             <div class="card-body">
                <h2 class="card-text">Mochila T60 </h2>
                <h3>R$ 160,00</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#um">
                    Comprar
                  </button>
            </div>
        </div>
    </div>

          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/mochila2.webp">
              <div class="card-body">
                  <h2 class="card-text">Mochila T60</h2>
                  <h3>R$ 120,50</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dois">
                    Comprar
                  </button>
              </div>
            </div>
          </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="imagens/mochila3.webp">
                <div class="card-body">
                    <h2 class="card-text">Mochila T60</h2>
                    <h3>R$150,00</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tres">
                    Comprar
                  </button>
                </div>
              </div>
            </div>

          <div class="col-md-3">
            <div class="card">
               <img class="card-img-top" src="imagens/mochila4.jpg">
                <div class="card-body">
                  <h2 class="card-text">Mochila T60</h2>
                  <h3>R$ 139,90</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#quatro">
                    Comprar
                  </button>
                </div>
            </div>
          </div>
        </div>
    </div>

<div class="modal fade" id="um" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila T60</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/mochila2.webp">
        <p>Mochila em couro legítimo, com costuras reforçadas e alças anatômicas.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dois" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila T60</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/mochila2.webp">
        <p>Mochila em couro legítimo, com costuras reforçadas e alças anatômicas.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila T60</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/mochila2.webp">
        <p>Mochila em couro legítimo, com costuras reforçadas e alças anatômicas.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="quatro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila T60</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/mochila2.webp">
        <p>Mochila em couro legítimo, com costuras reforçadas e alças anatômicas.</p>
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