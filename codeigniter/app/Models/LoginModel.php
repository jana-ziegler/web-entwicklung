<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {

    public function getMitgliedermail($mitglieder_mail = NULL){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('mitglieder.mail');

        if ($mitglieder_mail != NULL){
            $this->mitglieder->where('mitglieder.mail', $mitglieder_mail);
        }

        $result = $this->mitglieder->get();

        if ($mitglieder_mail != NULL)
            return $result->getRowArray();
        else
            return $result->getRowArray();
    }

    public function getMitgliederpasswort($mitglieder_passwort = NULL){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('mitglieder.passwort');

        if ($mitglieder_passwort != NULL){
            $this->mitglieder->where('mitglieder.passwort', $mitglieder_passwort);
        }

        $result = $this->mitglieder->get();

        if ($mitglieder_passwort != NULL)
            return $result->getRowArray();
        else
            return $result->getRowArray();
    }

    public function isValidMitglied($mitglieder_mail = NULL, $mitglieder_passwort = NULL){
        $this->mitglieder = $this->db->table('mitglieder');
        //SELECT * FROM mitglieder WHERE mitglieder.mail = $mitglieder_mail AND mitglieder.passwort = $mitglieder_passwort
        $this->mitglieder->select('*');

        if($mitglieder_mail != NULL && $mitglieder_passwort != NULL){
            $this->mitglieder->where('mitglieder.mail', $mitglieder_mail);
            $this->mitglieder->where('mitglieder.passwort', $mitglieder_passwort);
        }

        return true;
    }
}