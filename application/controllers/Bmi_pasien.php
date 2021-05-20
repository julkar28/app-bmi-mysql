<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bmi_pasien extends CI_Controller
{
    public function index()
    {
        $this->list();
    }
    public function list()
    {
        $this->load->model('bmi_pasien_model');
        $data['pasien'] = $this->bmi_pasien_model->getAll();

        $this->load->view('header');
        $this->load->view('bmi_pasien/list', $data);
        $this->load->view('footer');
    }
    public function view($id)
    {
        $this->load->model('bmi_pasien_model');
        $data['pasien'] = $this->bmi_pasien_model->findById($id);

        $this->load->view('header');
        $this->load->view('bmi_pasien/view', $data);
        $this->load->view('footer');
    }
}