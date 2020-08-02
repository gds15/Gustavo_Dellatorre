<?php $this->tituloPagina = "Login"; ?>

<?php $this->layout('layout.topoLogin'); ?>
    <div class="container">
      <div class="well">
      <h2>Entrar</h2>
      <br>
      <div id="login">
      <form action="/login" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" name="senha"  class="form-control">
        </div>
        <button class="btn btn-primary">Entrar</button>
      </form>
</div>
      </div>
    </div>  

<?php $this->layout('layout.rodape'); ?>
