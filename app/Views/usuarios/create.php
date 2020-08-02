<?php $this->tituloPagina = "Adicionar Usuários"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Adicionar</h2>

    <form action="/usuarios" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Senha::</label>
        <input type="password" name="senha" class="form-control">
      </div>
      
      <button class="btn btn-primary">Adicionar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>
