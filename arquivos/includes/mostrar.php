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
                                <div class="modal-body">
                                    <p>
                                    <?php
                                    echo 'ID: '.$cliente[0].'<br />Nome: '.$cliente[1].'<br />CPF: '.$cliente[2].'<br />RG: '.$cliente[3].'<br />IDADE: '.$cliente[4].'<br />SEXO: '.$cliente[5].'<br />ENDEREÇO: '.$cliente[6].'<br />NÚM: '.$cliente[7].'<br />COMPLEMENTO: '.$cliente[8].'<br />BAIRRO: '.$cliente[9].'<br />CIDADE: '.$cliente[10].'<br />UF: '.$cliente[11].'<br />PAIS: '.$cliente[12];
                                    ?>
                                    </p>
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