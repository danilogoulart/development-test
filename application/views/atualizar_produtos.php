<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Editar Produto</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						
						
							
								<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post" action="<?=base_url()?>produtos/salvaratualizacao">
									<fieldset>		
										
										<div class="control-group">											
											<label class="control-label" for="produtocodigo">Código do Produto:</label>
											<div class="controls">
												<input type="number" class="span6 disabled" name="produtocodigo" id="produtocodigo" value="<?=$produto[0]->id_produto;?>" disabled>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="produtonome">Nome do Produto:</label>
											<div class="controls">
												<input type="text" name="produtonome" required="required" class="span6" id="produtonome" value="<?=$produto[0]->nome_produto;?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="precoproduto">Preço do Produto (R$):</label>
											<div class="controls">
												<input type="number" name="precoproduto" required="required" step="any" class="span6" id="precoproduto" value="<?=$produto[0]->preco_produto;?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" name="qntproduto" for="qntproduto">Quant. em Estoque:</label>
											<div class="controls">
												<input type="number" required="required" class="span6" id="qntproduto" value="<?=$produto[0]->qnt_estoque;?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
                                        

										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button type="reset" class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
													
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      		
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->