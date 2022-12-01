<?php
require_once 'head.php';
require_once 'menu.php';
?>
  
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center tela">
                <h1>Desempenho físico</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid imagens">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
             <img class="card-img-top" src="imagens/suplemento.png">
             <div class="card-body">
                <h2 class="card-text">Creatina</h2>
                <h3>R$ 79,90</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suple1">
                    Comprar
                </button>
            </div>
        </div>
    </div>

        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/suplemento-2.png">
              <div class="card-body">
                  <h2 class="card-text">BCAA</h2>
                  <h3>R$ 59,90</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suple2">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/suplemento-3.png">
              <div class="card-body">
                  <h2 class="card-text">Nitro Tech Power</h2>
                  <h3>R$ 45,00</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suple3">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="imagens/suplemento-4.png">
              <div class="card-body">
                  <h2 class="card-text">Pro Gainer</h2>
                  <h3>R$ 39,99</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suple4">
                    Comprar
                  </button>
              </div>
            </div>
        </div>

    <div class="modal fade" id="suple1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creatina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplemento.png">
        <p>A Creatina é um composto de aminoácidos presente nas fibras musculares, atua ativamente na síntese proteica e no aumento da resistência muscular.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="suple2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BCAA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplemento-2.png">
        <p>O BCAA funciona na prevenção da fadiga muscular. O suplemento também pode te ajudar em diversas outras coisas, como na regulação do sistema imunológico, no aumento da performance e também para aumentar a velocidade do metabolismo e emagrecer.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="suple3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nitro Tech Power</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplemento-3.png">
        <p>O Nitro Tech é um produto elaborado à base de proteína de whey de elevada pureza, enriquecida com creatina e aminoácidos para conseguir uma fórmula superior, perfeita para uma ótima recuperação muscular após o treino e promover ganhos máximos de força e massa muscular.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar carrinho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="suple4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pro Gainer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img class="img-fluid" src="imagens/suplemento-4.png">
        <p>Pro Gainers Prodark é uma fórmula desenvolvida especialmente para séries de treinamento voltadas ao ganho de peso através do desenvolvimento muscular.</p>
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