<?php
class Datasiswa extends CI_Controller
{ 
    public function index() 

    { 
        $this->load->view('view-form-siswa'); 
    } 
    
    public function cetak() 
    { 
        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|min_length[8]', 
            [
                'required' => 'NIS Harus Diisi',
                'min_length' => 'NIS Terlalu Pendek'
            ]);
            if ($this->form_validation->run() != true) {
                $this->load->view('view-form-siswa');
            } else {
        $data = [ 
            'nama' => $this->input->post('nama'), 
            'nis' => $this->input->post('nis'), 
            'kelas' => $this->input->post('kelas'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'tempatlahir' => $this->input->post('tempatlahir'), 
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
        ]; 
        $this->load->view('view-data-siswa', $data); 
    }
}
}