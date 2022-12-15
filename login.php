<?php
require_once 'head.php';
require_once 'menu.php';
?>

   <div class="container-fluid texto">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>We Fitness</h2>
        </div>
      </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>  
        <div class="col-md-4">
        <form>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">E-mail</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Senha</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>
  <!-- Submit button -->
     <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button> 
     </div>
  </form>
</div>
    <div class="col-md-4"></div>
  </div>
</div>







<?php
require_once 'footer.php';
?>