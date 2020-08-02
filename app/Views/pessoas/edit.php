<?php $this->tituloPagina = "Editar Pessoa"; ?>

<?php $this->layout('layout.topo'); ?>
    <div class="container">
      <h2>Editar pessoa</h2>
      <br>
      <form action="/pessoas/<?php echo $this->modelo->id ?>" method="post">
        <input type="hidden" name="_METHOD" value="put">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" class="form-control" value="<?php echo $this->modelo->nome ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" value="<?php echo $this->modelo->email ?>">
        </div>
        <div class="form-group">
          <label for="email">CPF:</label>
          <input type="text" name="cpf" class="form-control" value="<?php echo $this->modelo->cpf ?>">
        </div>
        <div class="form-group">
          <label for="email">Data Nascimento:</label>
          <input type="text"  name="datanascimento" class="form-control" value="<?php echo $this->modelo->datanascimento ?>">
        </div>
        
        <button class="btn btn-primary">Atualizar</button>
      </form>

    </div>
<?php $this->layout('layout.rodape'); ?>
