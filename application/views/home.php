<div class="main">
  <div class="main-inner">
    <div class="container">
	
		<div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Produtos em Destaque</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="pricing-plans plans-3">
							
						<?php foreach ($destaque as $dest) {
							# code...
						 ?>	
						<div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		<?=$dest->nome_produto?>	        		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	R$ <?=number_format($dest->preco_produto,2,",",".")?><span class="term"> Quant. em Estoque <?=$dest->qnt_estoque?></span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	        					
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
					    
					<?php } ?>
						
				</div> <!-- /widget -->					
				
		    </div> <!-- /span12 -->     	
	      	
	      	
	      </div> <!-- /row -->
		  
      <div class="row">
        <div class="span12">
			<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Relatório de Estoque Baixo</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Nome do Produto </th>
                    <th> Preço</th>
                    <th> Qtd Estoque </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($produtos as $dest) {
							# code...
						 ?>	
                  <tr>
                    <td> <?=$dest->nome_produto?>  </td>
                    <td> <?=number_format($dest->preco_produto,2,",",".")?>  </td>
                    <td> <?=$dest->qnt_estoque?> </td>
                  </tr>  
                  <?php } ?>              
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
        </div>
        <!-- /span12 -->
      </div>
      <!-- /row --> 	  
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->