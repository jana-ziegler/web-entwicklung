<?php namespace App\Models;

use CodeIgniter\Model;

class MitgliederModel extends Model {

    public function getMitgliedername(){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('mitglieder.name');
        $result = $this->mitglieder->get();
        return $result->getRowArray();
    }

    public function getMitgliedermail(){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('mitglieder.mail');
        $result = $this->mitglieder->get();
        return $result->getRowArray();
    }

    public function getData() {
        $mitgliederListe = array(
            array('1', 'Max Mustermann', 'mustermann@muster.de'),
            array('2', 'Petra Müller', 'petra@müller.de')
        );

        return $mitgliederListe;
    }

    public function createMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->insert(array('name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'password' => $_POST['password']));
    }

    public function updateMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.mail', $_POST['mail']);
        $this->mitglieder->update(array('name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'password' => $_POST['password']));
        // Passwort nur bedingt anzeigen und Formular
    }

    public function deleteMitglied() {
        $this->mitlgieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.mail', $_POST['mail']);
        $this->mitglieder->delete();
    }
}
