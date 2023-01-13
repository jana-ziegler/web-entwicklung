<?php namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model {

    public function getAufgabennamen(){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.name');
        $result = $this->aufgaben->get();
        return $result->getRowArray();
    }

    public function getAufgabenbeschreibung(){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.beschreibung');
        $result = $this->aufgaben->get();
        return $result->getRowArray();
    }

    public function getAufgabenreiter(){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.name_r');
        $result = $this->aufgaben->get();
        return $result->getRowArray();
    }

    public function getAufgabenzuständigkeit(){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.mail');
        $result = $this->aufgaben->get();
        return $result->getRowArray();
    }

    /*
    public function getPersonen($person_id = NULL) {
        $this->personen = $this->db->table('personen');
        $this->personen->select('*');

        IF ($person_id != NULL)
            $this->personen->where('personen.id', $person_id);

        $this->personen->orderBy('Name');
        $result = $this->personen->get();

        if ($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson() {

        $this->personen = $this->db->table('personen');
        $this->personen->insert(array('vorname' => $_POST['vorname'],
            'name' => $_POST['name'],
            'strasse' => $_POST['strasse'],
            'plz' => $_POST['plz'],
            'ort' => $_POST['ort']));

    }

    public function updatePerson() {

        $this->personen = $this->db->table('personen');
        $this->personen->where('personen.id', $_POST['id']);
        $this->personen->update(array('vorname' => $_POST['vorname'],
            'name' => $_POST['name'],
            'strasse' => $_POST['strasse'],
            'plz' => $_POST['plz'],
            'ort' => $_POST['ort']));
    }

    public function deletePerson() {
        $this->personen = $this->db->table('personen');
        $this->personen->where('personen.id', $_POST['id']);
        $this->personen->delete();
    }
    */

}

