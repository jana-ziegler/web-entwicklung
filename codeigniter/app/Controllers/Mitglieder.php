<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class Mitglieder extends BaseController
{
    public function index()
    {
        $mitgliedermodel = new MitgliederModel();
        $data['mitglieder'] = $mitgliedermodel->getData();

        echo view('mitglieder', $data);
    }

    /*
    public function getData() {
        $mitgliederListe = array(
            array('1', 'Max Mustermann', 'mustermann@muster.de'),
            array('2', 'Petra Müller', 'petra@müller.de')
        );

        return $mitgliederListe;
    }


    public function getArray() {
        $mitgliedermodel = new MitgliederModel();
        $data['mitglieder'] = $mitgliedermodel->getData();

        echo view('mitglieder', $data);
    }
    */
}


