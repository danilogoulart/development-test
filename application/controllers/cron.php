<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends CI_Controller {

	

	public function index()
	{	
		
		$limit = rand(1,10);
		$this->db->select('id_produto, preco_produto');
		$this->db->order_by('rand()');
		$this->db->limit($limit);
		$this->db->where('qnt_estoque > 1');
		$data1 = $this->db->get('produtos')->result();

		$valorPedido = 0;
		$produtos = array();
		$idx = 0;
		
		foreach ($data1 as $produto) {						
			$produtos[$idx] = $produto->id_produto;
			$valorPedido = $valorPedido + $produto->preco_produto;
			$idx++;
		}
		
		$date = date('y/m/d') ;

		$pedidos["valor_pedido"]= $valorPedido;
		$pedidos["data_pedido"]= $date;

		if($this->db->insert('pedidos',$pedidos)){
			$id_pedido = $this->db->insert_id();

			for ($i=0; $i < $idx; $i++) { 
				$item_pedido["id_pedido"]= $id_pedido;
				$item_pedido["id_produto"]= $produtos[$i];
				if($this->db->insert('itens_pedidos',$item_pedido)){
					redirect(base_url().'pedidos/remove_cache');
				}
			}
		}


		


	}
}