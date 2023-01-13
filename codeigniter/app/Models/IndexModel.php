<?php namespace App\Models;

use CodeIgniter\Model;

class IndexModel extends Model {

    public function getAktuelleReiter(){
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('reiter.name');
        $result = $this->reiter->get();
        return $result->getRowArray();
    }

    public function getAktuelleAufgaben(){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.name');
        $result = $this->aufgaben->get();
        return $result->getRowArray();
    }
}