<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->db
		  ->select("produtos.nome_produto, produtos.preco_produto, produtos.qnt_estoque, COUNT(*) as c")
		  ->from("itens_pedidos")
		  ->join('produtos', 'produtos.id_produto = itens_pedidos.id_produto')
		  ->order_by("c", "desc")
		  ->limit("6")
		  ->group_by('itens_pedidos.id_produto');
		  $dados1['destaque'] = $this->db->get()->result();

		  $this->db
		  ->select("nome_produto, preco_produto, qnt_estoque")
		  ->from("produtos")
		  ->order_by("qnt_estoque", "asc")
		  ->limit("10");
		  
		  $dados1['produtos'] = $this->db->get()->result();



		$this->load->view('includes/header');
		$this->load->view('home', $dados1);
		$this->load->view('includes/footer');
	}
}
