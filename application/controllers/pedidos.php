<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	public function index()
	{	
		
		
		$this->db
		  ->select("group_concat(produtos.nome_produto)as nome_produto, pedidos.*")
		  ->from("produtos")
		  ->join('itens_pedidos', 'itens_pedidos.id_produto = produtos.id_produto')
		  ->join('pedidos', 'pedidos.id_pedido = itens_pedidos.id_pedido')
		  ->order_by("pedidos.id_pedido", "desc")
		  ->group_by('pedidos.id_pedido');

		  $dados1['pedidos'] = $this->db->get()->result();

		

		$this->load->view('includes/header');
		$this->load->view('pedidos',$dados1);
		$this->load->view('includes/footer');
	}

	public function remove_cache()
	{
		
		
	}
}
