Ola <?php echo $this->dados['Razao_social']; ?>

<?php

// $this->dados['usuarios']

foreach($this->dados['clientes'] as $cliente) {
    echo $cliente->getNome();
}