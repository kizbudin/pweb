<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->form_validation->set_rules('npm', 'NPM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Mahasiswa added!</div>');
            redirect('mahasiswa');
        }
    }

    public function jadwal()
    {

        $data['title'] = 'Jadwal Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['jadwal'] = $this->Mahasiswa_model->getAllJadwal();

        $this->form_validation->set_rules('matakuliah', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/jadwal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahJadwal();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal Mahasiswa added!</div>');

            redirect('mahasiswa/jadwal');
        }
    }



    public function ubahMhs($id)
    {
        $data['title'] = 'Ubah Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('npm', 'npm', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/ubahmhs', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahMahasiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Mahasiswa <b>Berhasil</b> diubah!</div>');
            redirect('mahasiswa');
        }
    }

    public function ubahJadwal($id)
    {
        $data['title'] = 'Ubah Jadwal';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['jadwal'] = $this->Mahasiswa_model->getJadwalById($id);

        $this->form_validation->set_rules('matakuliah', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/ubahjadwal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahJadwal();
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Jadwal <b>Berhasil</b> diubah!</div>');
            redirect('mahasiswa/jadwal');
        }
    }

    public function hapusMhs($id)
    {
        $this->Mahasiswa_model->hapusMahasiswa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil dihapus!</div>');
        redirect('mahasiswa');
    }

    public function hapusJadwal($id)
    {
        $this->Mahasiswa_model->hapusJadwal($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jadwal <b>Berhasil</b> dihapus!</div>');
        redirect('mahasiswa/jadwal');
    }

    public function Nilai()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['username' => $this->session->userdata('username')]
        )->row_array();

        $data['title'] = 'Nilai Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('mahasiswa/nilai', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/footer', $data);
    }
}
