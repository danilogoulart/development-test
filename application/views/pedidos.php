
<div class="main">
    <div class="main-inner">
        <div class="container">
        		<div class="row">	
        	      	<div class="span12">
          	      		<div class="widget widget-table action-table">
                          <div class="widget-header"> 
                              <i class="icon-th-list"></i>
                              <h3>Relatório de Pedidos</h3>
                          </div>
                          <!-- /widget-header -->
                          <div class="widget-content">
                              <table class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                        <th> Nº do Pedido </th>
                                        <th> Produtos</th>
                                        <th> Valor Total (R$) </th>
                    					          <th> Data do Pedido</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($pedidos as $pedido) {?>
                                    <tr>                                        
                                        <td> <?=$pedido->id_pedido;?> </td>
                                        <td> <?=$pedido->nome_produto;?> </td>
                                        <td> <?=number_format($pedido->valor_pedido,2,",",".");?></td>
                                        <td> <?=date('d/m/Y', strtotime($pedido->data_pedido));;?> </td>
                                        
                                    </tr>
                                    <?php } ?>                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /widget-content --> 
                      </div>
                      <!-- /widget --> 
        		      </div> <!-- /span12 -->     	 	
        	   </div> <!-- /row -->
        </div>
        <!-- /container --> 
    </div>
    <!-- /main-inner --> 
</div>
<!-- /main -->