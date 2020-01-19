<?php

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mahasiswa')->result_array();
    }

    public function getAllJadwal()
    {
        return $this->db->get('tb_jadwal')->result_array();
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('tb_mahasiswa', ['id' => $id])->row_array();
    }

    public function getJadwalById($id)
    {
        return $this->db->get_where('tb_jadwal', ['id' => $id])->row_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email')
        ];

        $this->db->insert('tb_mahasiswa', $data);
    }

    public function tambahJadwal()
    {
        $data = [
            'matakuliah' => $this->input->post('matakuliah', true),
            'hari'      => $this->input->post('hari', true),
            'jam'       => $this->input->post('jam', true),
            'dosen'     => $this->input->post('dosen', true)
        ];
        $this->db->insert('tb_jadwal', $data);
    }

    public function hapusMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_mahasiswa', ['id' => $id]);
    }

    public function hapusJadwal($id)
    {
        $this->db->delete('tb_jadwal', ['id' => $id]);
    }


    public function ubahMahasiswa()
    {
        $data = [
            'npm'       => $this->input->post('npm', true),
            'nama'      => $this->input->post('nama', true),
            'jurusan'      => $this->input->post('jurusan', true),
            'alamat'    => $this->input->post('alamat', true),
            'email'     => $this->input->post('email', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mahasiswa', $data);
    }

    public function ubahJadwal()
    {
        $data = [
            'matakuliah' => $this->input->post('matakuliah'),
            'hari'      => $this->input->post('hari'),
            'jam'       => $this->input->post('jam'),
            'dosen'     => $this->input->post('dosen')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_jadwal', $data);
    }


    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('npm', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('email', $keyword);

        $query = $this->db->get('tb_mahasiswa');

        return $query->result_array();
    }
}
