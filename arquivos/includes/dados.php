<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="panel-group" id="panel">
            <!-- // imprimir isso -->
            <?php
            // Inverte a ordem:
            if(isset($_GET['ordem']) && $_GET['ordem']=='i') {
                $inverso = $clientes->get_clientes();
                $result = array_reverse($inverso);
                $resultado = array_reverse($inverso, true);
            }else {
                $resultado = $clientes->get_clientes();
            }
            // Mostra os clientes
            foreach($resultado as $cliente) {
                //} desativado
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel" href="#panel<?php echo $cliente[0]; ?>"><?php echo $cliente[0].' - '.$cliente[1]; ?></a>
                    </div>
                    <div id="panel<?php echo $cliente[0]; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php
                            echo 'ID: '.$cliente[0].'<br />Nome: '.$cliente[1].'<br />CPF: '.$cliente[2].'<br />RG: '.$cliente[3].'<br />IDADE: '.$cliente[4].'<br />SEXO: '.$cliente[5].'<br />ENDEREÇO: '.$cliente[6].'<br />NÚM: '.$cliente[7].'<br />COMPLEMENTO: '.$cliente[8].'<br />BAIRRO: '.$cliente[9].'<br />CIDADE: '.$cliente[10].'<br />UF: '.$cliente[11].'<br />PAIS: '.$cliente[12];
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!--//até aqui -->
        </div>
    </div>
</div>