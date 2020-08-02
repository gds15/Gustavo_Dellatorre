<?php $this->tituloPagina = "Lista de Pessoas"; ?>

<?php $this->layout('layout.topo'); ?>

  <div class="row container">
    <h2>Lista de pessoas</h2>
  </div>
  <div class="row container">
    <a class="btn btn-outline-primary" href="/pessoas/adicionar">Criar</a>
  </div>
  <br>
  <div class="row container">
    
      <?php foreach ($this->modelo as $key => $value): ?>
        

        <div class="jumbotron">
          <h1 class="display-6"><?php echo  $value['nome']?></h1>
          <p class="lead"><?php echo  $value['cpf']?> - <?php echo  $value['datanascimento']?></p>
          <hr class="my-4">
          <p><?php echo  $value['email']?></p>

          <form action="/pessoas/deletar/<?php echo $value['id']?>" method="post">
            <input type="hidden" name="_METHOD" value="delete">
            <a href="/pessoas/detalhe/<?php echo  $value['id']?>"><button class="btn btn-primary" type="button">Detalhe</button></a>
            <a href="/pessoas/editar/<?php echo  $value['id']?>"><button class="btn btn-primary" type="button">Editar</button></a>
            <button class="btn btn-primary">Deletar</button>
          </form>
        </div>
        
      <?php endforeach ?>
    
  </div>


<?php $this->layout('layout.rodape'); ?>
