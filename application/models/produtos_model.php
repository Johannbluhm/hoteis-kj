<?php
class Produtos_model extends CI_model {
    public function buscarProdutos() {
        return $this->db->get("produtos")->result_array();
    }
}