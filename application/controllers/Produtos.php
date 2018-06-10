<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Produtos extends CI_Controller {

    public function index() {

        $this->output->enable_profiler(TRUE);// essa função da todos os dados de saida da classe em que a mesma estar

        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscarProdutos();


        $dados = array("prd" => $produtos);// "ban"=>$banners, "cat"=>$categorias);
        $this->load->helper(array("url", "currency", "form"));
        $this->load->view('produtos/listar_produtos', $dados);
	}

    public function cadastro() {

        $this->output->enable_profiler(TRUE);// essa função da todos os dados de saida da classe em que a mesma estar

        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscarProdutos();


        $dados = array("prd" => $produtos);// "ban"=>$banners, "cat"=>$categorias);
        $this->load->helper(array("url", "currency", "form"));
        $this->load->view('produtos/cadastro-prd',$dados);
	}

}