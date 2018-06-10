<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function autentificar() {
        $this->load->helper('url');
        $this->load->model("usuarios_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));

        $usuario = $this->usuarios_model->buscarEmailSenha($email, $senha);

        if($usuario) {
            /*
            $this->session->set_userdata("usuario_logado" , $usuario);
            $dados = array("mensagem" => "logado com sucesso, Usuário e senha validos!");
*/
             redirect('produtos/cadastro', '');
             
            
        } else {
            redirect('login/cadastrar', '');
        }

        $this->load->view("login/autenticar", $dados);
        
    }

    public function index() {
        

        $this->load->view("login/autenticar");
        
    }

    public function cadastrar() {
        $this->load->view("login/cadastro");
    }
}