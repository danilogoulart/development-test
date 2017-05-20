<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller {

	
	public function index($indice=null)
	{
		
		$this->db->select('*');
		$this->db->order_by("nome_produto", "asc");
		$dados['produtos'] = $this->db->get('produtos')->result();
		$this->load->view('includes/header');
		if($indice==1){
			$data['msg'] = "Produto cadastrado com sucesso!";
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
			$data['msg'] = "Não foi possível cadastrar o produto!";
			$this->load->view('includes/msg_erro', $data);
		}else if($indice==3){
			$data['msg'] = "Produto excluído com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}else if($indice==4){
			$data['msg'] = "Não foi possível excluir o produto!";
			$this->load->view('includes/msg_erro', $data);
		}else if($indice==5){
			$data['msg'] = "Produto alterado com sucesso!";
			$this->load->view('includes/msg_sucesso', $data);
		}else if($indice==6){
			$data['msg'] = "Não foi possível alterar o produto!";
			$this->load->view('includes/msg_erro', $data);
		}

		$this->load->view('produtos',$dados);
		$this->load->view('includes/footer');
	}

	public function cadastrar()
	{
		$data['nome_produto'] = $this->input->post('nome_produto');
		$data['preco_produto'] = $this->input->post('preco_produto');
		$data['qnt_estoque'] = $this->input->post('qnt_estoque');
		$data['qnt_vendida'] = 0;

		if($this->db->insert('produtos',$data)){
			redirect('produtos/1');
		}else{
			redirect('produtos/2');
		}
	}

	public function excluir($id=null)
	{
		$this->db->where('id_produto',$id);

		if($this->db->delete('produtos')){
			redirect('produtos/3');
		}else{
			redirect('produtos/4');
		}
	}

	public function atualizar($id=null)
	{
		$this->db->where('id_produto',$id);
		
		$data1['produto'] = $this->db->get('produtos')->result();

		$this->load->view('includes/header');
		$this->load->view('atualizar_produtos', $data1);
		$this->load->view('includes/footer');
	}

	public function salvaratualizacao()
	{
		$id = $this->input->post('produtocodigo');
		$data['nome_produto'] = $this->input->post('produtonome');
		$data['preco_produto'] = $this->input->post('precoproduto');
		$data['qnt_estoque'] = $this->input->post('qntproduto');

		$this->db->where('id_produto',$id);

		if($this->db->update('produtos',$data)){
			redirect('produtos/5');
		}else{
			redirect('produtos/6');
		}




	}
}

