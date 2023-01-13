<?php namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model {

    public function getReitername(){
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('reiter.name');
        $result = $this->reiter->get();
        return $result->getRowArray();
    }

    public function getReiterbeschreibung(){
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('reiter.beschreibung');
        $result = $this->reiter->get();
        return $result->getRowArray();
    }
}
