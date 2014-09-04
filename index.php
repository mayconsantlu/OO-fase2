<?php
    require_once 'arquivos/includes/header.php';
?>
    <header>
    <?php
        require_once 'arquivos/includes/menu.php';
    ?>
</header>
<section>
    <?php

    require_once 'arquivos/includes/Clientes.php';
    require_once 'arquivos/includes/adicionar_clientes.php';
    //$clientes = new Clientes();
    require_once 'arquivos/includes/dados.php';
    ?>
</section>
    <?php
        require_once 'arquivos/includes/footer.php';
    ?>