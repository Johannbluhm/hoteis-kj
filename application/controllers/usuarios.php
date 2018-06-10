<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
	
	
	public function novo() {
	    $usuario = array(
	        "nome" => $this->input->post("nome"),
	        "email" => $this->input->post("email"),
	        "senha" => md5($this->input->post("senha"))
	    );

	    
        $this->load->model("usuarios_model");
        $this->usuarios_model->salvar($usuario);
		redirect('produtos/cadastro', '');
	}

	public function quarto() {
	    $quartos = array(
	        "codigo" => $this->input->post("codigo"),
	        "nome" => $this->input->post("nome"),
			"quarto" => $this->input->post("quarto"),
			"preco" => $this->input->post("preco"),
			"quantidade_pessoas" => $this->input->post("quantidade_pessoas")
			
	    );

		$this->load->model("quatos_model");
        $this->quartos_model->salvar($quartos);
		
        $this->load->model("usuarios_model");
        $this->usuarios_model->salvar($usuario);
		redirect('produtos/cadastro', '');
	}
}