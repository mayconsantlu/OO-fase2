<div class="row clearfix">
    <div class="col-md-12 column">
    <?php
        // imprimir isso
            // Inverte a ordem:
            if(isset($_GET['ordem']) && $_GET['ordem']=='i') {
                $inverso = $clientes->get_clientes();
                $result = array_reverse($inverso);
                $resultado = array_reverse($inverso, true);
            }else {
                $resultado = $clientes->get_clientes();
            }
    ?>
        <table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Mais</th>
				</tr>
			</thead>
			<tbody>
            <?php
            // Mostra os clientes
            foreach($resultado as $cliente) {
                ?>
				<tr>
					<td><?php echo $cliente[0]; ?></td>
					<td><?php echo $cliente[1]; ?></td>
					<td><?php echo $cliente[2]; ?></td>
					<td><a id="modal<?php echo $cliente[0]; ?>" href="#modal<?php echo $cliente[0]; ?>" role="button" class="btn btn-info btn-sm" data-toggle="modal">mais..</a></td>
                    <!-- modal com informações -->
                    <div class="modal fade" id="modal<?php echo $cliente[0]; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        <?php echo $cliente[1]; ?>
                                    </h4>
                                </div>
                                <div class="modal-body cliente">
                                    <ul class="list-group">
                                        <li class="list-group-item">ID: <?php echo $cliente[0]; ?></li>
                                        <li class="list-group-item">Nome: <?php echo $cliente[1]; ?></li>
                                        <li class="list-group-item">CPF: <?php echo $cliente[2]; ?></li>
                                        <li class="list-group-item">RG: <?php echo $cliente[3]; ?></li>
                                        <li class="list-group-item">IDADE: <?php echo $cliente[4]; ?></li>
                                        <li class="list-group-item">SEXO: <?php echo $cliente[5]; ?></li>
                                        <li class="list-group-item">ENDEREÇO: <?php echo $cliente[6]; ?></li>
                                        <li class="list-group-item">NÚM: <?php echo $cliente[7]; ?></li>
                                        <li class="list-group-item">COMPLEMENTO: <?php echo $cliente[8]; ?></li>
                                        <li class="list-group-item">BAIRRO: <?php echo $cliente[9]; ?></li>
                                        <li class="list-group-item">CIDADE: <?php echo $cliente[10]; ?></li>
                                        <li class="list-group-item">UF: <?php echo $cliente[11]; ?></li>
                                        <li class="list-group-item">PAIS: <?php echo $cliente[12]; ?></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </tr>
                <?php
                }
                ?>
			</tbody>
		</table>

        <!--//até aqui -->
    </div>
</div>