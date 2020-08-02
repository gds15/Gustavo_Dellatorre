<?php $this->tituloPagina = "Lista de Pessoa"; ?>

<?php $this->layout('layout.topo'); ?>
    <div class="container">
        <h2>Detalhe Pessoa:</h2>
        <br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->modelo->nome; ?></h5>
                <p class="card-text">CPF: <?php echo $this->modelo->cpf; ?></p>
                <p class="card-text">email: <?php echo $this->modelo->email; ?></p>
                <p class="card-text">Dn: <?php echo $this->modelo->datanascimento; ?></p>
                <a href="/pessoas" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

<?php $this->layout('layout.rodape'); ?>
