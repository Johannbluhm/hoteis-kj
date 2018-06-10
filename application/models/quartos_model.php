<?php
class Quartos extends CI_Model {
    public function ($quartos) {
        $this->db->insert("quartos", $quartos);
    }
}