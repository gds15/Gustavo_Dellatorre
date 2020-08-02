<?php $this->tituloPagina = "Adicionar Pessoa"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Adicionar</h2>

    <form action="/pessoas" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">CPF:</label>
        <input type="text" name="cpf" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Data Nascimento:</label>
        <input type="text" name="datanascimento" class="form-control">
      </div>
      
      <button class="btn btn-primary">Adicionar</button>
    </form>


<?php $this->layout('layout.rodape'); ?>
