<?php $this->tituloPagina = "Editar Usuários"; ?>

<?php $this->layout('layout.topo'); ?>

    <div class="container">
      <h2>Editar usuario</h2>
      <br>
      <form action="/usuarios/<?php echo $this->modelo->id ?>" method="post">
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
          <label for="email">Senha:</label>
          <input type="password" name="senha" class="form-control">
        </div>
        
        <button class="btn btn-primary">Atualizar</button>
      </form>

    </div>

<?php $this->layout('layout.rodape'); ?>
