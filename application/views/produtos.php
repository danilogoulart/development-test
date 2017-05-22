<?php 
$variavel = "";
?>
<div class="main">
    <div class="main-inner">
        <div class="container">     

            <div class="row">
                <div class="span12">

                    <div style="float: right;" class="control-group">                     

                        <div class="controls">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Ações</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#myModal" role="button"data-toggle="modal"><i class="icon-pencil"></i> Novo Produto</a></li>
                                </ul>
                            </div>

                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 id="myModalLabel">Editar Produto</h3>
                                </div>
                                <form method="post" action="<?=base_url()?>produtos/cadastrar">
                                    <div class="modal-body">


                                        <label for="nome_produto">Nome do produto:</label>

                                        <input type="text" name="nome_produto" required="required" placeholder="Nome do Produto...">

                                        <label for="preco_produto">Preço do produto (R$):</label>

                                        <input type="number" step="0.01" name="preco_produto" required="required" placeholder="Preço do produto...">

                                        <label for="qnt_estoque">Quantidade em estoque:</label>

                                        <input type="number" name="qnt_estoque" required="required" placeholder="Quantidade em estoque...">

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                        <button class="btn btn-primary">Salvar Alterações</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->
                </div>
            </div>


            <div class="row">

                <div class="span12">

                    <div class="widget widget-table action-table">
                        <div class="widget-header"> <i class="icon-th-list"></i>
                            <h3>Produtos</h3>
                                               
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>                                        
                                        <th> Nome do Produto </th>
                                        <th> Preço R$ </th>
                                        <th> Código do Produto </th>
                                        <th> Qtd Estoque </th>
                                        <th> Excluir </th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($produtos as $produto) {?>
                                    <tr>                                        
                                        <td> <?=$produto->nome_produto;?> </td>
                                        <td> <?=number_format($produto->preco_produto,2,",",".");?></td>
                                        <td> <?=$produto->id_produto;?> </td>
                                        <td> <?=$produto->qnt_estoque;?> </td>
                                        <td class="td-actions">

                                            <a href="<?=base_url('produtos/atualizar/'.$produto->id_produto)?>" class="btn btn-small btn-success"><i class="btn-icon-only  icon-edit"> </i></a>

                                            <a href="<?=base_url('produtos/excluir/'.$produto->id_produto)?>" onclick="return confirm('Deseja mesmo excluir o produto?');" class="btn btn-danger btn-small">
                                                <i class="btn-icon-only icon-remove"> </i>
                                            </a>

                                        </td>
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