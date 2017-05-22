<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos extends CI_Model 
{
	public function getProdutos()
	{
		$query = $this->db->get("produtos");
		return $query-result();
	}

	public function addProduto($dados=null)
	{
		if($dados!=null):
			$this->db->insert("produtos", $dados);
		endif;	
	}

	 public function getProdutoByID($id=NULL)
    {
    if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("produtos");        
        //retornamos o produto
        return $query->row();   
    endif;
    } 

    
	//Atualizr um produto na tabela produtos
    public function editarProduto($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('produtos', $dados, array('id'=>$id));      
    endif;
    }  

}
