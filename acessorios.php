<?php
require_once 'head.php';
require_once 'menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center tela">
                <h1>Acessórios</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
             <img class="card-img-top" src="imagens/acessorio-1.png">
             <div class="card-body">
                <h2 class="card-text">Bracadeira celular</h2>
                <h3>R$ 29,90</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acessorio-1">
                    Comprar
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/acessorio-2.png">
              <div class="card-body">
                  <h2 class="card-text">Kit ginastica</h2>
                  <h3>R$ 89,90</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acessorio-2">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/acessorio-3.png">
              <div class="card-body">
                  <h2 class="card-text">Luva musculação</h2>
                  <h3>R$ 15,00</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acessorio-3">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/acessorio-4.png">
              <div class="card-body">
                  <h2 class="card-text">Garrafa térmica</h2>
                  <h3>R$ 29,90</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acessorio-4">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

        <div class="modal fade" id="acessorio-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bracadeira celular</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/acessorio-1.png">
        <p>Bracadeira para celular.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="acessorio-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kit Ginastica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
</div>

    <div class="modal-body">
        <img class="img-fluid" src="imagens/acessorio-2.png">
        <p>Kit de ginastica para treinar em casa.</p>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="acessorio-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Luva Musculação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
</div>

    <div class="modal-body">
        <img class="img-fluid" src="imagens/acessorio-3.png">
        <p>Luva de musculação para proteger suas mãos.</p>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="acessorio-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Garrafa Térmica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
</div>

    <div class="modal-body">
        <img class="img-fluid" src="imagens/acessorio-4.png">
        <p>Garrafa térmica resistente e ótima para conservação da temperatura da água.</p>
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